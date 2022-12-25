<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about-us');
});

Route::get('sign-up', [RegisterController::class, 'registerPage'])->name('signup');

Route::get('/sign-in', function () {
    return view('pages.sign-in');
});

// ini nanti diganti ke /product/{id}
Route::get('/product-detail', function () {
    return view('pages.product-detail');
});