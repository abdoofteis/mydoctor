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
    return redirect('mydoctor');
});



Route::post('/contact-us','ContactController@storcontact');   //store  data form contact us to database

Route::patch('/mydoctor/{id}', 'DoctorsController@update')->middleware('auth');    //to store new data of doctor to data base
Route::delete('/mydoctor/{id}', 'DoctorsController@destroy')->name('destroy')->middleware('auth');    //to delete doctor from database


Route::post('/mydoctor','DoctorsController@store'); // store doctors-info in DataBase

Route::patch('/section/{id}', 'SectionController@update')->middleware('auth');    //to store new data of departments to data base
Route::delete('/section/{id}', 'SectionController@destroy')->name('destroy-section')->middleware('auth');    //to delete department from database


Route::post('mydoctor/sections','SectionController@store'); // store doctors-info in DataBase

Route::get('mydoctor#department','SectionController@department')->name('department');

Route::delete('/city/{id}/','CitiesController@destroy')->name('destroy-city')->middleware('auth');    //to delete city from database

Route::post('/mydoctor/city','CitiesController@store'); // store cities-info in DataBase

Route::post('/mydoctor/search','DoctorsController@search'); // search input filter 


//lang routes

Route::get('lang/{lang}','LangController@lang');

Route::group(['middleware'=>'Lang'], function(){

    Route::get('mydoctor/section/{id}/{id2?}','DoctorsController@Sections')->name('all');  // section pages
    
    Route::get('mydoctor','SectionController@Home')->name('page');  //show home page

    Route::get('/mydoctor/contact-us','ContactController@contactt')->name('contactus');// contact us page

    Route::get('/mydoctor/create-doctor','DoctorsController@create')->name('create-doctor')->middleware('auth'); //show form to add new doctors to dataBase
    Route::get('/mydoctor/{id}/edit','DoctorsController@edit')->name('edit')->middleware('auth');  //to edit doctors info

    Route::get('/mydoctor/create-section','SectionController@create')->name('create-section')->middleware('auth');  //  show form to add new section
    Route::get('/section/{id}/edit','SectionController@edit')->name('edit-section')->middleware('auth');  //to edit department info

    Route::get('/mydoctor/create-city','CitiesController@create')->name('create-city')->middleware('auth');  //  show form to add new City



    Route::get('/customer/login', 'Customer\AuthController@showLoginForm');
    Route::post('/customer/login', 'Customer\AuthController@login');
    Route::post('/customer/logout', 'Customer\AuthController@logoutt');
    Auth::routes(['register' =>false]);
    Route::get('/home', 'HomeController@index')->name('home');


});

// Lang end

