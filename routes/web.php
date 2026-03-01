<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;


Route::get('/', [HomePageController::class, 'index']);
Route::get('/about-me', [HomePageController::class, 'aboutme']);
Route::get('/contact-me', [HomePageController::class, 'contactMe']);
Route::get('/blog-details', [HomePageController::class, 'blogDetails']);
