<?php

Route::get('/', 'WelcomeController@index');

//Leave Behind Routes
//get requests
Route::get('/create-leave-behind', 'LeaveBehindController@create');
Route::get('/view-leave-behinds', 'LeaveBehindController@index');

//post requests
Route::post('storeLeaveBehind', 'LeaveBehindController@store');
Route::post('deleteLeaveBehind', 'LeaveBehindController@destroy');

