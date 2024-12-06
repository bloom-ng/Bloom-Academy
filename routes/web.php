<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ViewController;
use App\Models\Post;



//Routes for the blog
Route::get('/blogs', function () {
    $posts = App\Models\Post::published()->latest('published_at')->paginate(); // Order by published_at descending
    $featured_posts = App\Models\Post::where('is_featured', 1)
        ->latest('published_at')
        ->get();

    return view(
        'blogs',
        [
            'posts' => $posts,
            'featured_posts' => $featured_posts->take(4)
        ]
    );
});

Route::get('/blog/{id}', function ($id) {
    $post = App\Models\Post::with(['user'])->find($id);
    if (empty($post)) {
        $post = App\Models\Post::with(['user'])->where('slug', $id)->first();
    }
    $similarPosts = [];
    if (!empty($post)) {
        $words = explode(' ', $post->title);
        $similarPosts = App\Models\Post::where(function ($query) use ($words) {
            foreach ($words as $word) {
                $query->orWhere('title', 'LIKE', "%{$word}%");
            }
        })->take(3)->get()
            ->filter(function ($post, $key) use ($id) {
                return $post->id != $id;
            });
    }

    if (empty($post)) {
        throw new NotFoundHttpException();
    }

    // increase view
    View::create(['post_id' => $post->id]);

    return view('blog-view', [
        'post' => $post,
        'similar_posts' => $similarPosts
    ]);
});


Auth::routes();

Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Add other routes that require authentication here


    Route::get('dashboard', [DashboardController::class, 'show']);

    // Blog routes
    Route::get('/blogs', [PostController::class, 'index']);
    Route::get('/blogs/create', [PostController::class, 'create']);
    Route::get('/blogs/{id}', [PostController::class, 'show']);
    Route::post('/blogs/{id}', [PostController::class, 'store']);
    Route::delete('/blogs/{id}', [PostController::class, 'destroy']);


    //CMS DELETE
    Route::delete('/cms/{cms}', [CMSController::class, 'destroy']);
});

Route::get('/admin/login', function () {
    return view('auth.login');
});

Route::post('/upload-images', [PostCOntroller::class, 'upload'])->name('upload-img')->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/marketing', function () {
    return view('marketing');
});



// Route::get('/dropdown', function () {
//     return view('dropdown');
// });

Route::get('/terms-of-service', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/payment', function () {
    $userData = session('userData');

    if (!$userData) {
        return redirect('/submit');
    }

    return view('payment', compact('userData'));
});

Route::get('/submit', function () {
    return view('submit');
});

Route::post('/process-payment', [UserDataController::class, 'store']);
Route::get('/confirm-payment', [PaymentController::class, 'confirm']);

//Webhook - Flutterwave
Route::post('/flw-webhook', function (Request $request) {
    // If you specified a secret hash, check for the signature
    $secretHash = env('FLUTTERWAVE_SECRET_HASH');
    $signature = $request->header('verif-hash');

    if (!$signature || ($signature !== $secretHash)) {
        // This request isn't from Flutterwave; discard
        abort(401);
    }

    $payload = $request->all();
    // It's a good idea to log all received events.
    Log::info($payload);

    // Ensure the storage directory exists
    $directory = storage_path('flutterwave_payloads');
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }

    // Write the payload to a file
    $filename = $directory . '/flutterwave_payload_' . date('YmdHis') . '.txt';
    file_put_contents($filename, json_encode($payload, JSON_PRETTY_PRINT));

    // Do something (that doesn't take too long) with the payload
    return response()->json(['status' => 'success'], 200);
});
