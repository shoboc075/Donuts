<?php

//Pre Login
Route::get('/', 'GenreController@index');

//Login Root
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//Signin Root
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

//ログインできた際のRooting
Route::group(['middleware' => ['auth']], function () {
    //
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::get('hobbies', 'HobbiesController@show')->name('4_Genre.genre');
    
    
    
    
})



?>
