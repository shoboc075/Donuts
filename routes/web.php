<?php



Route::get('/', function() {
    return view('1_PreLogin.welcome');
});

Route::resource('hobbies', 'HobbiesController');

?>
