<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'/*, ['section' => $section]*/);

})->name('welcome');

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
    ->name('portfolio.section');

    // Route::get('/illustration', 'App\Http\Controllers\PortfolioController@getIndex')
    // ->name('portfolio.illustration');

    // Route::get('/software', 'App\Http\Controllers\PortfolioController@getIndex')
    // ->name('portfolio.software');

    Route::get('/project/{section}/{id}', 'App\Http\Controllers\PortfolioController@getProjectById')
    ->name('project');
});

Route::get('/weird-stuff', function () {
    return view('weird-stuff.weird-stuff');
})->name('weird-stuff');

Route::group(['prefix' => 'contact'], function () {
    Route::get('', function () {
        return view('contact.index');
    })->name('contact');

    Route::post('', function(\Illuminate\Http\Request $request,
    \Illuminate\Validation\Factory $validator){
        $validation = $validator->make($request->all(),[
            'fullname' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'discipline' => 'required',
            'comments' => 'required',
            'not_a_robot' => 'required'
           ]);

           if($validation->fails()){
               return redirect()->back()->withErrors($validation);
           }
    })->name('contact');

});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'App\Http\Controllers\AdminController@login')
    ->name('login');

    Route::get('', 'App\Http\Controllers\AdminController@getIndex')
    ->name('admin.index');

    Route::post('', 'App\Http\Controllers\AdminController@savePost')
    ->name('admin.save');

    Route::post('', 'App\Http\Controllers\AdminController@deletePost')
    ->name('admin.delete');


    // Route::get('', function (){
    //     return view('admin.index');
    // })->name('admin.index');
});
