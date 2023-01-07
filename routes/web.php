<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;

// general route
Route::get('/', [HomeController::class, 'viewIndex'])->name('home');
Route::get('/about-us', [HomeController::class, 'viewAboutUs'])->name('about-us');
Route::get('/product-detail', [HomeController::class, 'viewProducts'])->name('product-detail');
Route::get('/products', [ProductController::class, 'productList'])->name('product-list');

//Middleware Admin Route
Route::group(['middleware'=>'admin'], function(){
  Route::get('admin/insert-product', [AdminDashboardController::class, 'insertProduct'])->name('view-insert-product');
  Route::post('admin/insert-product', [ProductController::class, 'createProduct'])->name('insert-product');
  Route::get('admin/insert-category', [AdminDashboardController::class, 'insertCategory'])->name('view-insert-category');
  Route::post('admin/insert-category', [CategoryController::class, 'createCategory'])->name('insert-category');
  Route::get('admin/edit-product/{id}', [AdminDashboardController::class, 'editProduct'])->name('view-update-product');
  Route::patch('admin/edit-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
  Route::delete('admin/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
  
});

// Route Auth
Route::get('sign-up', [RegisterController::class, 'index'])->name('signup');
Route::get('sign-up/user', [RegisterController::class, 'register'])->name('register');
Route::get('sign-in', [LoginController::class, 'index'])->name('signin');
Route::post('sign-in', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('user/profile', [ProfileController::class, 'viewProfile'])->name('view-profile');
Route::get('user/profile/update', [ProfileController::class, 'viewUpdateProfile'])->name('view-update-profile');
Route::patch('user/profile/update', [ProfileController::class, 'updateProfile'])->name('update-profile');

// mungkin ini nanti bisa diganti user id atau username


// mungkin ini nanti bisa diganti /{user id atau username}/update


Route::get('/cart', function() {
  return view('pages.cart');
});

Route::get('/checkout', function() {
  return view('pages.checkout');
});

Route::get('/transactions', function() {
  return view('pages.transactions');
});

// ini buat testing
Route::get('/test', function() {
  return view('pages.test');
});