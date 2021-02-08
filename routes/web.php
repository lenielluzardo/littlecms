<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'App\Http\Controllers\HomeController@getIndex')
->name('welcome');

Route::group(['prefix' => 'blog'], function(){

    Route::get('', 'App\Http\Controllers\PostController@getIndex')
    ->name('blog');

    // Route::get('', function () {
    //     return view('blog.index');
    // })->name('blog');

    Route::get('/posts/{id}', 'App\Http\Controllers\PostController@getPostById')
    ->name('post');

    // Route::get('/posts/{id}', function ($id) {
    // if($id == 1){
    //     $post = [
    //         'title' => 'My Awesome TITLE',
    //         'content' => 'AJAJAJAJAJ'
    //     ];
    // }else {
    //     $post = [
    //         'title' => 'Something Else',
    //         'content' => 'AJAJAJAJAJ'
    //     ];
    // }

    //     return view('blog.post', ['post' => $post]);
    // })->name('post');
});

Route::group(['prefix' => 'portfolio'], function(){
    Route::get('/{section}', 'App\Http\Controllers\PortfolioController@getIndex')
    ->name('portfolio');

    Route::get('/project/{section}/{id}', 'App\Http\Controllers\PortfolioController@getProjectById')
    ->name('project');

    // Route::get('/illustration', 'App\Http\Controllers\PortfolioController@getIndex')
    // ->name('portfolio.illustration');

    // Route::get('/software', 'App\Http\Controllers\PortfolioController@getIndex')
    // ->name('portfolio.software');
});

Route::get('/about', function () {
    return 'ABOUT';
})->name('about');

Route::group(['prefix' => 'contact'], function () {

    Route::get('', 'App\Http\Controllers\ContactController@getIndex')
    ->name('contact.index');

    // Route::get('', function(){
    //     return view('contact.index');
    // })
    // ->name('contact.index');

    Route::post('', 'App\Http\Controllers\ContactController@sendEmail')
    ->name('contact.send');
    // Route::post('', function(\Illuminate\Http\Request $request,
    // \Illuminate\Validation\Factory $validator){
    //     $validation = $validator->make($request->all(),[
    //         'fullname' => 'required',
    //         'email' => 'required',
    //         'subject' => 'required',
    //         'discipline' => 'required',
    //         'comments' => 'required',
    //         'not_a_robot' => 'required'
    //        ]);

    //        if($validation->fails()){
    //            return redirect()->back()->withErrors($validation);
    //        }
    // })->name('contact');

});

Route::group(['prefix' => 'admin'], function () {

    Route::get('', 'App\Http\Controllers\AdminController@getIndex')
    ->name('admin.index');

    Route::post('', 'App\Http\Controllers\AdminController@savePost')
    ->name('admin.save');

    Route::get('/{id}', 'App\Http\Controllers\AdminController@deletePost')
    ->name('admin.remove');



    // Route::get('', function (){
    //     return view('admin.index');
    // })->name('admin.index');
});
Auth::routes();



// Route::get('/login', function(){
//     return view('admin.login');
// })->name('auth.login');

Route::post('login', [
    'uses' => 'App\Http\Controllers\SigninController@signin',
    'as' => 'auth.signin'
]);
// 'App\Http\Controllers\SigninController@signin')
// ->name('login');

// Route::get('/register', 'App\Http\Controllers\LoginController@login')
// ->name('register');
