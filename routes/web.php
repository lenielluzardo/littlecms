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
    // $section=[
    //   'title' => 'Home Page'
    // ];

    return view('welcome'/*, ['section' => $section]*/);

})->name('welcome');
Route::group(['prefix' => 'blog'], function(){
    Route::get('', function () {
        return view('blog.index');
    })->name('blog');
    Route::get('/posts/{id}', function ($id) {

    if($id == 1){
        $post = [
            'title' => 'My Awesome TITLE',
            'content' => 'AJAJAJAJAJ'
        ];
    }else {
        $post = [
            'title' => 'Something Else',
            'content' => 'AJAJAJAJAJ'
        ];
    }

        return view('blog.post', ['post' => $post]);
    })->name('post');
});


Route::get('/animation', function () {
    return view('animation.portfolio');
})->name('animation');

Route::get('/illustration', function () {
    return view('illustration.portfolio');
})->name('illustration');

Route::get('/software', function () {
    return view('software.portfolio');
})->name('software');

Route::get('/weird-stuff', function () {
    return view('weird-stuff.weird-stuff');
})->name('weird-stuff');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Route::get('', function (){
        return view('admin.index');
    })->name('admin.index');

    Route::post('', function (\Illuminate\Http\Request $request){

         return view('admin.save');
    })->name('admin.save');
});
