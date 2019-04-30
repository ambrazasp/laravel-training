<?php

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

Route::view('/', 'welcome')->name('home');

Route::view('about', 'about');
Route::view('landing', 'index');

Route::get('contact', function () {
    $interests = [
        'coding',
        'coffee',
        'basketball'
    ];

    $data = [
        'interests' => $interests
    ];

    return view('contact', $data);
});

//Route::get('skills', 'SkillsController@index')->name('skills-page');

//Route::resource('posts', 'PostController')
//->except(['index']);


Route::middleware('auth')->group(function() {
    /* Posts */
//    Route::get('posts', 'PostController@index')->name('posts.index')->middleware('auth');
    Route::get('posts/create', 'PostController@create')->name('posts.create');
//    Route::get('posts/{post}', 'PostController@show')->name('posts.show');
    Route::post('posts', 'PostController@store')->name('posts.store');
    Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::put('posts/{post}', 'PostController@update')->name('posts.update');
    Route::delete('posts/{post}', 'PostController@destroy')->name('posts.destroy');

    Route::post('duplicate-post', 'DuplicatePost')->name('posts.duplicate');
    Route::post('restore-post', 'RestorePost')->name('posts.restore');

    Route::get('top-posts', 'ShowTopPosts')->name('posts.top');
    Route::get('recent-posts', 'ShowRecentPosts')->name('posts.recent');
    Route::get('deleted-posts', 'ShowDeletedPosts')->name('posts.deleted');
    /* /Posts */

    Route::resource('comments', 'CommentController');
});

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');

Route::resource('files', 'FileController');
Route::get('image-files', 'ShowImageFiles')->name('files.images');
Route::get('large-files', 'ShowLargeFiles')->name('files.large');

Route::resource('categories', 'CategoryController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/error/{code}', function($code) {
    abort($code);
});

Route::get('/mail-template', function() {
    $post = \App\Post::orderBy('created_at', 'DESC')->first();

    return new \App\Mail\PostPublish($post);
});

Route::view('numbers', 'numbers');