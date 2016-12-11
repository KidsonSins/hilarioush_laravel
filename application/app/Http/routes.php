<?php

Route::get('/', function () {
    return view('frontend.index');
});


Route::get('admin', function (){
    return view('backend.dashboard');

});
Route::auth();


Route::get('/home', 'HomeController@index');

Route::resource('admin/users', 'AdminUsersController');