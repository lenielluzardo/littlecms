<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function(){
    return view('layout.master');
})
->name('home');

Route::group(['prefix' => 'blog'], function(){

    Route::get('', 'App\Http\Controllers\PostController@getIndex')
    ->name('blog');

    Route::get('/posts/{id}', 'App\Http\Controllers\PostController@getPostById')
    ->name('post');
});

Route::group(['prefix' => 'portfolio'], function(){
    Route::get('/{section}', 'App\Http\Controllers\PortfolioController@getIndex')
    ->name('portfolio');

    Route::get('/{section}/{id}', 'App\Http\Controllers\PortfolioController@getProjectById')
    ->name('project');
});

Route::get('/about', 'App\Http\Controllers\AboutController@getIndex')
->name('about');

Route::group(['prefix' => 'contact'], function () {

    Route::get('', 'App\Http\Controllers\ContactController@getIndex')
    ->name('contact.index');

    Route::post('', 'App\Http\Controllers\ContactController@contactFromWeb')
    ->name('contact.send');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('', 'App\Http\Controllers\AdminController@getIndex')
    ->name('admin.index');

    Route::post('', 'App\Http\Controllers\AdminController@savePost')
    ->name('admin.save');

    Route::get('/{id}', 'App\Http\Controllers\AdminController@deletePost')
    ->name('admin.remove');
});

Auth::routes();

Route::post('login', [
    'uses' => 'App\Http\Controllers\SigninController@signin',
    'as' => 'auth.signin'
]);
