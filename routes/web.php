<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomePageController::class, 'index']);
Route::get('/about-me', [HomePageController::class, 'aboutme']);
Route::get('/contact-me', [HomePageController::class, 'contactMe']);
Route::get('/blog-details', [HomePageController::class, 'blogDetails']);

Auth::routes([
    'register' => false,
]);

Route::get('admin/logout', [AdminController::class, 'logout']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);


Route::get('/admin/create-blog', [BlogController::class, 'createBlog']);