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

Route::get('/', function () {
    return view('website.home');
});
Route::get('/about', function () {
    return view('website.galeri');
});
Route::get('/galery', function () {
    return view('website.galery');
});

Route::get('/article', function () {
    return view('website.article.list_article');
});
Route::get('view', function () {
    return view('website.article.vv_article');
});


Route::get('/event', function () {
    return view('website.event');
});


Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/about', function () {
    return view('website.about');
});

Route::get('/login', function () {
    return view('login');
});