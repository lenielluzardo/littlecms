<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'App\Http\Controllers\HomeController@Index' )
->name('home');

Route::group([''], function(){
    Route::get('{module}', 'App\Http\Controllers\EntryController@Index')
    ->name('blog');

    // Route::get('/{section}/{id}', 'App\Http\Controllers\PostController@Post')
    // ->name('post');
});

Route::group([''], function(){
    Route::get('portfolio/{category}', 'App\Http\Controllers\EntryController@Index')
    ->name('portfolio');

    // Route::get('/{section}/{id}', 'App\Http\Controllers\PortfolioController@getProjectById')
    // ->name('project');
});

Route::get('/about', 'App\Http\Controllers\AboutController@getIndex')
->name('about');

Route::group(['prefix' => 'contact'], function () {

    Route::get('', 'App\Http\Controllers\ContactController@Index')
    ->name('contact');

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
