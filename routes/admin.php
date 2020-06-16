<?php


Route::get('/admin', function () {
    return 'ADMIN';
});


Route::namespace('Front')->group(function(){

    Route::get('users','UserController@showAdminName');
});

Route::prefix('s')->group(function(){

    Route::get('a','Front\UserController@showAdminAge');
});


Route::group(['prefix'=>'g'],function(){

    Route::get('a',function (){
        echo '<h1>second group</h1>';
    });
    Route::get('b','Front\UserController@showAdminName');
});

Route::resource('news','NewsController');
