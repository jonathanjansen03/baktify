<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about-us');
});

// ini nanti diganti ke /product/{id}
Route::get('/product-detail', function () {
    return view('pages.product-detail');
});