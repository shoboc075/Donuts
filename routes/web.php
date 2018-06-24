<?php



Route::get('/', "HobbiesController@index");

Route::resource('hobbies', 'HobbiesController');

?>
