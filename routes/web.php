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
use App\Http\Controllers\LeadController;
use App\Http\Controllers\Admin\LeadController as AdminLeadController;
use App\Models\Post;



//Routes for the blog
Route::get('/blogs', function () {
    $posts = Post::published()
        ->latest('published_at')
        ->paginate(12); // Show 12 posts per page
    
    $featured_post = Post::published()
        ->where('is_featured', 1)
        ->latest('published_at')
        ->first();

    return view('blog', [
        'posts' => $posts,
        'featured_post' => $featured_post
    ]);
})->name('blogs.index');

Route::get('/blog/{id}', [PostController::class, 'preview'])->name('blog.preview');

Auth::routes();

Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Add other routes that require authentication here


    Route::get('dashboard', [DashboardController::class, 'show']);
    Route::get('/leads', [AdminLeadController::class, 'index'])->name('admin.leads.index');
    Route::get('/leads/export', [AdminLeadController::class, 'downloadCsv'])->name('admin.leads.export');

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

Route::post('/upload-images', [PostController::class, 'upload'])->name('upload-img')->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/finance', function () {
    return view('finance');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/marketing', function () {
    return view('marketing');
});

// Lead form submission routes
Route::post('/finance/download', [LeadController::class, 'downloadFinance'])->name('finance.download');
Route::post('/marketing/download', [LeadController::class, 'downloadMarketing'])->name('marketing.download');



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
