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



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function (){
    return 'gogogog';
});


Route::group(['prefix'=>'offers'],function (){
    //Route::get('store','CrudController@store');
    Route::get('create','CrudController@create');
    Route::post('store','CrudController@store');

});


