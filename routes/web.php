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
    return view('welcome');
})->name('welcome');

Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');

Route::get('/animation', function () {
    return view('blog.blog');
})->name('animation');

Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');

Route::get('/illustration', function () {
    return view('blog.blog');
})->name('illustration');

Route::get('/software-development', function () {
    return view('blog.blog');
})->name('software');

Route::get('/weird-stuff', function () {
    return view('blog.blog');
})->name('weird-stuff');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');
