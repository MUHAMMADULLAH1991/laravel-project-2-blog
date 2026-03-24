<?php

use App\Http\Controllers\Frontend\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/get-blogs', [ApiController::class, 'getBlogList']);
Route::get('/get-blog-details/{id}', [ApiController::class, 'getBlogDetails']);
Route::get('/get-general-data', [ApiController::class, 'getGeneralData']);
Route::post('/send-contact-message', [ApiController::class, 'sendContactMessage']);