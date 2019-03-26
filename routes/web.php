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
    return view('homepage');
});

Route::get('/whylatin', function () {
    return view('whylatin');
});

// lessons //

Route::get('/lessenlatijns', function () {
    return view('/lessons/lessenlatijns');
});

Route::get('/les1', function () {
    return view('/lessons/les1');
});

// quizzes //

Route::get('/quizzenlatijns', function () {
    return view('/quizzen/quizzenlatijns');
});

Route::get('/quiz1', function () {
    return view('/quizzen/quizles1');
});

// forums //

Route::get('/forum', function () {
    return view('/forums/forum');
});

Route::get('/quiz1', function () {
    return view('/quizzen/quizles1');
});