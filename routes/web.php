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

Route::get('/home', 'testController@index');

Route::get('/home/{id}', 'testController@show');

Route::get('/teacher', 'TeacherController@index');

Route::get('/teacher/quiz', 'TeacherController@quiz');

Route::get('/teacher/about', 'TeacherController@about');

//Route::get('/teacher/')

Route::get('/tes', function () {
    return view('index');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
