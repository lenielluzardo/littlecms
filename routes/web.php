<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::group(['prefix' => '/'], function(){

    // dd("**** Web Root ****");
    Route::get('/', 'App\Http\Controllers\Web\HomeController@Index' )
    ->name('home');

    // dd("**** Web Blog ****");
    Route::get('blog', 'App\Http\Controllers\Web\BlogController@Index')
    ->name('web.blog.index');

    // dd("**** Web Portfolio ****");
    Route::get('portfolio', 'App\Http\Controllers\Web\PortfolioController@Index')
    ->name('web.portfolio.index');

    // dd("**** Web About ****");
    Route::get('about', 'App\Http\Controllers\Web\AboutController@Index')
    ->name('web.about.index');

    // dd("**** Web Contact ****");
    Route::group(['prefix' => 'contact'], function () {

        Route::get('', 'App\Http\Controllers\Web\ContactController@Index')
        ->name('web.contact.index');

        Route::post('', 'App\Http\Controllers\Web\ContactController@contactFromWeb')
        ->name('web.contact.email');
    });

});

Auth::routes();

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function ()
{
    // dd("**** Admin Routes / Root ****");
    Route::get('', 'App\Http\Controllers\Admin\HomeController@Index')
    ->name('admin.home.index');
   
    Route::get('{module}', function($module)
    {
        // dd("**** Admin Routes / Module / Index ****");
        return App::make('App\Http\Controllers\Admin\\'.ucfirst($module).'Controller')->Index();
    })
    ->name('admin.module.index');

    Route::get('{module}/create', function($module)
    {
        // dd("**** Admin Routes / Module / Create ****");
        return App::make('App\Http\Controllers\Admin\\'.ucfirst($module).'Controller')->Create();
    })
    ->name('admin.module.get.create');
    
    Route::get('{module}/edit/{id}', function($module, $id)
    {
        // dd("**** Admin Routes / Module / Edit ****");
        return App::make('App\Http\Controllers\Admin\\'.ucfirst($module).'Controller')->Edit((int)$id);
    })
    ->name('admin.module.get.edit');

    Route::post('{module}/edit/', function($module, Request $request)
    {
        // dd("**** Admin Routes / Module / Save ****");
        return App::make('App\Http\Controllers\Admin\\'.ucfirst($module).'Controller')->Save($request);
    })
    ->name('admin.module.save');

    Route::post('{module}/{id}', function($module, $id)
    {
        // dd("**** Admin Routes / Module / Delete ****");
        return App::make('App\Http\Controllers\Admin\\'.ucfirst($module).'Controller')->Delete($id);
    })
    ->name('admin.module.delete');
   
});
