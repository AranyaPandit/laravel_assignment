<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group(['prefix' => 'blog'], function () {
    Route::post('/create', [BlogPostController::class, 'create']);
    Route::get('/list', [BlogPostController::class, 'list']);
    Route::put('update/{id}', [BlogPostController::class, 'update']);
    Route::get('about/{id}', [BlogPostController::class, 'about']);
});