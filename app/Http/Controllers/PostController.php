<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Topic;
use App\Services\StatsAggregator;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Carbon\Carbon;

use Illuminate\Http\Request;

$uuid = Str::uuid()->toString();

class PostController extends Controller
{
    /**
     * Display a listing of the blogs.
     *
     * 
     */
    public function index()
    {
        $posts = Post::query()
            //  ->when(request()->query('type', 'published') != 'draft', function (Builder $query) {
            //      return $query->published();
            //  }, function (Builder $query) {
            //      return $query->draft();
            //  })
            ->when(request()->query('search', '') != '', function (Builder $query) {
                $query->where('title', 'like', '%' . request()->query('search') . '%');
                $query->orWhere('summary', 'like', '%' . request()->query('search') . '%');
                return $query;
            })
            ->latest()
            ->withCount('views')
            ->paginate();

        $draftCount = Post::query()
            ->draft()
            ->count();

        $publishedCount = Post::query()
            ->published()
            ->count();


        return view('admin.blog.index', [
            'posts' => $posts,
            'draftCount' => $draftCount,
            'publishedCount' => $publishedCount,
        ]);
    }

    /**
     * Show the form for creating a new blog.
     *
     * 
     */
    public function create()
    {
        $uuid = Str::uuid();
        $post = new Post([
            "id" => $uuid->toString()
        ]);

        return view('admin.blog.create', [
            'post' => $post,
            'slug' => "post-{$uuid->toString()}",
            'tags' => Tag::query()->get(['name', 'slug']),
            'topics' => Topic::query()->get(['name', 'slug']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PostRequest  $request
     * @param $id
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function store(PostRequest $request, $id)
    {
        $data = $request->validated();

        $post = Post::query()
            ->with('tags', 'topic')
            ->find($id);

        if (! $post) {
            $post = new Post([
                'id' => $id,
                'slug' => Str::slug($data['title']) . "-" . Str::random(3),
            ]);
        }


        $post->fill($data);
        $post->is_featured = empty($data['is_featured']) ? 0 : 1;

        $post->user_id = $post->user_id ?? request()->user()->id;

        // Add images
        if ($request->hasFile('featured_image')) {
            $url = $request->file('featured_image');
            $path = $url->storeAs('posts', $url->getClientOriginalName(), 'public');
            $post->featured_image = $path; // this becomes "posts/filename.jpg"
        }


        $post->save();

        $tags = Tag::query()->get(['id', 'name', 'slug']);
        $topics = Topic::query()->get(['id', 'name', 'slug']);

        $tagsToSync = collect($request->input('tags', []))->map(function ($item) use ($tags) {
            $tag = $tags->firstWhere('slug', $item['slug']);

            if (! $tag) {
                $tag = Tag::create([
                    'id' => Uuid::uuid4()->toString(),
                    'name' => $item['name'],
                    'slug' => $item['slug'],
                    'user_id' => request()->user()->id,
                ]);
            }

            return (string) $tag->id;
        })->toArray();

        $topicToSync = collect($request->input('topic', []))->map(function ($item) use ($topics) {
            $topic = $topics->firstWhere('slug', $item['slug']);

            if (! $topic) {
                $topic = Topic::create([
                    'id' => Uuid::uuid4()->toString(),
                    'name' => $item['name'],
                    'slug' => $item['slug'],
                    'user_id' => request()->user()->id,
                ]);
            }

            return (string) $topic->id;
        })->toArray();

        $post->tags()->sync($tagsToSync);

        $post->topic()->sync($topicToSync);

        return back()->with('success', 'Action Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * 
     */
    public function show($id)
    {
        $post = Post::query()
            ->with('tags:name,slug', 'topic:name,slug')
            ->findOrFail($id);

        return view("admin.blog.create", [
            'post' => $post,
            'tags' => Tag::query()->get(['name', 'slug']),
            'topics' => Topic::query()->get(['name', 'slug']),
        ]);
    }

    /**
     * Display stats for the specified resource.
     *
     * @param  string  $id
     * 
     */
    public function stats(string $id)
    {
        $post = Post::query()
            ->published()
            ->findOrFail($id);

        $stats = new StatsAggregator(request()->user());

        $results = $stats->getStatsForPost($post);

        return response()->json($results);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return mixed
     *
     * @throws Exception
     */
    public function destroy($id)
    {
        $post = Post::query()
            ->findOrFail($id);

        $post->delete();

        return back()->with('success', 'Action Successful');
    }

    public function upload(Request $request)
    {
        $path = $request->file('file')->store('posts', 'public');
        return response()->json(['location' => asset('storage/' . $path)]);
    }

    /**
     * Preview the blog post
     * 
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function preview($id)
    {
        // Add published scope for public viewing
        $post = Post::published()
            ->with(['user', 'tags', 'topic'])
            ->select(['id', 'title', 'body', 'featured_image', 'published_at', 'summary', 'slug'])
            ->find($id);
        
        if (empty($post)) {
            $post = Post::published()
                ->with(['user', 'tags', 'topic'])
                ->select(['id', 'title', 'body', 'featured_image', 'published_at', 'summary', 'slug'])
                ->where('slug', $id)
                ->firstOrFail();
        }

        // Get recent posts
        $recentPosts = Post::published()
            ->select(['id', 'title', 'summary', 'published_at'])
            ->latest('published_at')
            ->where('id', '!=', $post->id)
            ->take(4)
            ->get();

        // Format the date
        $formattedDate = $post->published_at 
            ? Carbon::parse($post->published_at)->format('jS F Y')
            : now()->format('jS F Y');

        return view('blogg', [
            'post' => $post,
            'recentPosts' => $recentPosts,
            'formattedDate' => $formattedDate
        ]);
    }
}
