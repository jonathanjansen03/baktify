<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;

Route::get('/', [HomeController::class, 'viewIndex'])->name('home');
Route::get('/about-us', [HomeController::class, 'viewAboutUs'])->name('about-us');
Route::get('/product-detail', [HomeController::class, 'viewProducts'])->name('product-detail');

//route user dashboard
Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard-user');


//route register
Route::get('sign-up', [RegisterController::class, 'index'])->name('signup');
Route::get('sign-up/user', [RegisterController::class, 'register'])->name('register');

//Route login
Route::get('sign-in', [LoginController::class, 'index'])->name('signin');
Route::post('sign-in', [LoginController::class, 'login'])->name('login');

//Route logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
