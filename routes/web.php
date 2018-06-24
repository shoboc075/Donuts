<?php

Route::get('/', function() {
    return view('1_PreLogin.welcome');
});

Route::resource('hobbies', 'HobbiesController');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

?>
