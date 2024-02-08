<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GetBlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





Route::get('/list', [GetBlogController::class, 'list'])->name('all.blog');
Route::get('/about/{id}', [GetBlogController::class, 'about'])->name('about.blog');

