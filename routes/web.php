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

Route::get('/',function(){
    return view('welcome');
});
Route::get('/{any}', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function(){
    Route::get('init','AppController@init');
    Route::post('login','AppController@login');
    Route::post('register','AppController@register');
    Route::post('logout','AppController@logout');
});

Route::prefix('tasks')->group(function(){
    Route::get('init','TasksController@init');
    Route::post('add','TasksController@add');
    Route::post('delete','TasksController@dlt');
    Route::post('edit','TasksController@edit');
});
