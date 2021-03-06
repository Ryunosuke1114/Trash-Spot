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



Auth::routes();
Route::group(['middleware'=>'auth'],function(){
    


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/map', 'PostController@map');

Route::post('/posts', 'PostController@store');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');

});


