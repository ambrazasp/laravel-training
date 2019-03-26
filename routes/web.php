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

Route::get('skills', function () {
    $skills = [
        [
            'title' => 'javascript',
            'percentage' => 80
        ],
        [
            'title' => 'php',
            'percentage' => 60
        ],
        [
            'title' => 'html',
            'percentage' => 90
        ]
    ];

    $data = [
        'skills' => $skills
    ];

    return view('skills', $data);
});
