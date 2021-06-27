<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::group(['prefix' => '/'], function(){

    Route::get('', 'App\Http\Controllers\Public\HomeController@Index' )
    ->name('home');

    Route::get('blog', 'App\Http\Controllers\Public\BlogController@Index')
    ->name('blog');

    Route::get('portfolio', 'App\Http\Controllers\Public\PortfolioController@Index')
    ->name('portfolio');

    Route::group(['prefix' => 'contact'], function () {

        Route::get('', 'App\Http\Controllers\Public\ContactController@Index')
        ->name('contact');

        Route::post('', 'App\Http\Controllers\Public\ContactController@contactFromWeb')
        ->name('contact.send');
    });

    Route::get('about', 'App\Http\Controllers\Public\AboutController@Index')
    ->name('about');

    // Route::get('/{section}/{id}', 'App\Http\Controllers\PostController@Post')
    // ->name('post');
});

Auth::routes();


// Route::get('/{module}', function($module, Request $request) {

//     return App::make('App\Http\Controllers\Public\\'.ucfirst($module).'Controller')->Index($request);

// })->name('public');

// Route::group([''], function(){
//     Route::get('blog', 'App\Http\Controllers\User\BlogController@Index')
//     ->name('blog');

//     // Route::get('/{section}/{id}', 'App\Http\Controllers\PostController@Post')
//     // ->name('post');
// });

// Route::group([''], function(){
//     Route::get('portfolio/{category}', 'App\Http\Controllers\User\PortfolioController@Index')
//     ->name('portfolio');

//     // Route::get('/{section}/{id}', 'App\Http\Controllers\PortfolioController@getProjectById')
//     // ->name('project');
// });

// Route::get('/about', 'App\Http\Controllers\User\AboutController@getIndex')
// ->name('about');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('', 'App\Http\Controllers\Admin\AdminController@Index')
    ->name('admin');
    // dd("hello");

    Route::get('/{module}', function($module) {

        return App::make('App\Http\Controllers\Admin\\'.ucfirst($module).'Controller')->Index();

    })->name('module');

    // Route::post('/{module}', function($module) {

    //     return App::make('App\Http\Controllers\Admin\\'.ucfirst($module).'ManagementController')->Index();

    // })->name('module');

    // Route::get('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
    // Route::get('/login', 'App\Http\Controllers\Auth\LoginController@Index');

    // Route::post('/login', 'App\Http\Controllers\Auth\LoginController@Authenticate');

    // Route::post('/login', [
    //     'uses' => 'App\Http\Controllers\Auth\LoginController@Authenticate',
    //     'as' => 'auth.signin'
    // ]);
    Route::post('/user', 'App\Http\Controllers\Admin\UsersController@PostUser')
    ->name('user.post');

    Route::get('/user', 'App\Http\Controllers\Admin\UsersController@GetUser')
    ->name('user.get');
    // Route::get('/{id}', 'App\Http\Controllers\Admin\AdminController@deletePost')
    // ->name('admin.remove');

    Route::get('/entries', 'App\Http\Controllers\Admin\EntriesController@Index')
    ->name('entries');

    Route::get('/menus', 'App\Http\Controllers\Admin\MenusController@Index')
    ->name('menus');

    // Route::get('/user', 'App\Http\Controllers\Admin\UserManagementController@Index')
    // ->name('user');


});


