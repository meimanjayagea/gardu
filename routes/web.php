<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('tentang', [HomeController::class, 'about']);
Route::get('galery', [HomeController::class, 'galery']);
Route::get('article', [HomeController::class, 'article']);
Route::get('view', [HomeController::class, 'view']);
Route::get('event', [HomeController::class, 'event']);
Route::get('pengurus', [HomeController::class, 'pengurus']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('login', [HomeController::class, 'login']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');