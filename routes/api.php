<?php

Route::get('/departments','API\DepartmentController@index');

Route::get('/doctors','API\DoctorController@index');
Route::get('/doctors/{id}','API\DoctorController@show');

Route::get('/cities','API\CityController@index');
