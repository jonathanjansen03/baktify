<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;


Route::get('/', [HomeController::class, 'viewIndex'])->name('home');
Route::get('/about-us', [HomeController::class, 'viewAboutUs'])->name('about-us');

//Middleware Admin Route
Route::group(['middleware'=>'admin'], function(){
  Route::get('admin/dashboard/insert-product', [AdminDashboardController::class, 'insertProduct'])->name('view-insert-product');
  Route::get('admin/dashboard/insert-category', [AdminDashboardController::class, 'insertCategory'])->name('view-insert-category');
  Route::post('admin/dashboard/insert-category', [CategoryController::class, 'createCategory'])->name('insert-category');
});

//Route Home
Route::get('/product-detail', [HomeController::class, 'viewProducts'])->name('product-detail');

// Route User Dashboard
Route::get('/products', [UserDashboardController::class, 'productList'])->name('product-list');

//Route Admin Dashboard

// Route Auth
Route::get('sign-up', [RegisterController::class, 'index'])->name('signup');
Route::get('sign-up/user', [RegisterController::class, 'register'])->name('register');
Route::get('sign-in', [LoginController::class, 'index'])->name('signin');
Route::post('sign-in', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// mungkin ini nanti bisa diganti user id atau username
Route::get('/user-profile', function() {
  return view('pages.user-profile');
});

Route::get('/cart', function() {
  return view('pages.cart');
});

Route::get('/checkout', function() {
  return view('pages.checkout');
});

Route::get('/transactions', function() {
  return view('pages.transactions');
});
