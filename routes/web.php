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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//category routes

Route::get('/category','CategorytController@index');

Route::get('/category/create','CategorytController@create');
Route::Post('/category','CategorytController@store');

Route::get('/category/{id}/edit','CategorytController@edit');
Route::PUT('/category/{id}','CategorytController@update');


Route::DELETE('/category/{id}','CategorytController@destroy');

//product routes

Route::get('/product','ProductController@index');

Route::get('/product/create','ProductController@create');
Route::Post('/product','ProductController@store');

Route::get('/product/{id}/edit','ProductController@edit');
Route::PUT('/product/{id}','ProductController@update');


Route::DELETE('/product/{id}','ProductController@destroy');
