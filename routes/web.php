<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'App\Http\Controllers\User\HomeController@Index' )
->name('home');

Route::group([''], function(){
    Route::get('blog', 'App\Http\Controllers\User\BlogController@Index')
    ->name('blog');

    // Route::get('/{section}/{id}', 'App\Http\Controllers\PostController@Post')
    // ->name('post');
});

Route::group([''], function(){
    Route::get('portfolio/{category}', 'App\Http\Controllers\User\PortfolioController@Index')
    ->name('portfolio');

    // Route::get('/{section}/{id}', 'App\Http\Controllers\PortfolioController@getProjectById')
    // ->name('project');
});

Route::get('/about', 'App\Http\Controllers\User\AboutController@getIndex')
->name('about');

Route::group(['prefix' => 'contact'], function () {

    Route::get('', 'App\Http\Controllers\User\ContactController@Index')
    ->name('contact');

    Route::post('', 'App\Http\Controllers\User\ContactController@contactFromWeb')
    ->name('contact.send');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('', 'App\Http\Controllers\Admin\AdminController@Index')
    ->name('admin');
    // dd("hello");

    Route::get('/{module}', function($module) {

        return App::make('App\Http\Controllers\Admin\\'.ucfirst($module).'ManagementController')->Index();

    })->name('module');


    Route::get('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
    // Route::get('/login', 'App\Http\Controllers\Auth\LoginController@Index');

    // Route::post('/login', 'App\Http\Controllers\Auth\LoginController@Authenticate');

    // Route::post('/login', [
    //     'uses' => 'App\Http\Controllers\Auth\LoginController@Authenticate',
    //     'as' => 'auth.signin'
    // ]);
    // Route::post('', 'App\Http\Controllers\Admin\AdminController@savePost')
    // ->name('admin.save');

    // Route::get('/{id}', 'App\Http\Controllers\Admin\AdminController@deletePost')
    // ->name('admin.remove');

    Route::get('/entries', 'App\Http\Controllers\Admin\EntryManagementController@Index')
    ->name('entries');

    Route::get('/menus', 'App\Http\Controllers\Admin\MenuManagementController@Index')
    ->name('menus');

    // Route::get('/user', 'App\Http\Controllers\Admin\UserManagementController@Index')
    // ->name('user');


});

Auth::routes();


