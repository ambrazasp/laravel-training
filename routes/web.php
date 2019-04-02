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

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('skills', 'SkillsController@index')->name('skills-page');

//Route::resource('posts', 'PostController')
//->except(['index']);

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');
Route::post('posts', 'PostController@store')->name('posts.store');
Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('posts/{id}', 'PostController@update')->name('posts.update');
Route::delete('posts/{id}', 'PostController@destroy')->name('posts.destroy');

Route::resource('files', 'FileController');
