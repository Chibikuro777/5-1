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

Route::group(
    ['prefix' => 'user', 'middleware' => 'auth'],
    function () {
        Route::get('/news', 'User\PostController@index');
        Route::post('/news', 'User\PostController@post');
    }
);

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
