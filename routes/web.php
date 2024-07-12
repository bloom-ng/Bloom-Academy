<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDataController;
use Illuminate\Http\Request;

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
    return view('payment');
});

Route::get('/submit', function () {
    return view('submit');
});

Route::post('/process-payment', [UserDataController::class, 'store']);

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