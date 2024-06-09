<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/marketing', function () {
    return view('marketing');
});



Route::get('/dropdown', function () {
    return view('dropdown');
});

Route::get('/terms-of-service', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/payment', function () {
    return view('payment');
});

