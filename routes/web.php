<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;


Route::get('/', [HomeController::class, 'viewIndex'])->name('home');
Route::get('/about-us', [HomeController::class, 'viewAboutUs'])->name('about-us');

//Middleware Admin Route
Route::group(['middleware'=>'admin'], function(){
  Route::get('admin/dashboard/insert-product', [AdminDashboardController::class, 'insertProduct'])->name('insert-product');
  Route::get('admin/dashboard/insert-category', [AdminDashboardController::class, 'insertCategory'])->name('insert-category');
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

