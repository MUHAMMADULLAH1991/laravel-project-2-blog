<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomePageController::class, 'index']);
Route::get('/about-me', [HomePageController::class, 'aboutme']);
Route::get('/contact-me', [HomePageController::class, 'contactMe']);
Route::post('/store-contact-message', [HomePageController::class, 'storeContactMessage']);
Route::get('/blog-details/{id}', [HomePageController::class, 'blogDetails']);

Auth::routes([
    'register' => false,
]);

Route::get('admin/logout', [AdminController::class, 'logout']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('admin/settings', [AdminController::class, 'showSettings']);
Route::post('admin/settings-update', [AdminController::class, 'updateSettings']);

Route::get('admin/contact-messages', [AdminController::class, 'showMessages']);
Route::get('admin/contact-messages/delete/{id}', [AdminController::class, 'deleteMessages']);


Route::get('/admin/create-blog', [BlogController::class, 'createBlog']);
Route::post('/admin/store-blog', [BlogController::class, 'storeBlog']);
Route::get('/admin/list-blog', [BlogController::class, 'listBlog']);
Route::get('/admin/delete-blog/{id}', [BlogController::class, 'deleteBlog']);
Route::get('/admin/edit-blog/{id}', [BlogController::class, 'editBlog']);
Route::post('/admin/update-blog/{id}', [BlogController::class, 'updateBlog']);