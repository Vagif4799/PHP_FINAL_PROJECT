<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\homePageController::class, 'index']);
Route::get('/posts/{slug}', [\App\Http\Controllers\homePageController::class, 'singlePage'])->name('post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('contact', [\App\Http\Controllers\ContactController::class, 'contact']);
Route::post('/mail', [\App\Http\Controllers\ContactController::class, 'sendMail'])->name('mail');
Route::get('/{page}', [\App\Http\Controllers\homePageController::class, 'getPages'])->name('page');

