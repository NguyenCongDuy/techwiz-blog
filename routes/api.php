<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\Api\CommentApiController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    // Danh sách bài viết
    Route::get('/posts', [PostApiController::class, 'index']);
    Route::get('/posts/{id}', [PostApiController::class, 'show']);

    // Comment cho bài viết
    Route::get('/posts/{id}/comments', [CommentApiController::class, 'index']);
    Route::post('/posts/{id}/comments', [CommentApiController::class, 'store']);
});