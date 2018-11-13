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

Route::get('/', function () {
    return view('welcome');
});


/* Auth
======================*/
Auth::routes();

/* doctors
======================*/
Route::get('/doctors', 'DoctorsController@index')->name('doctors.index');

Route::get('/doctors/create', 'DoctorsController@create')->name('doctors.create');
Route::post('/doctors', 'DoctorsController@store')->name('doctors.store');

Route::get('/doctors/edit', 'DoctorsController@edit')->name('doctors.edit');
Route::patch('/doctors', 'DoctorsController@update')->name('doctors.update');

Route::get('/doctors/search', 'DoctorsController@search')->name('doctors.search');

Route::get('/doctors/{doctor}', 'DoctorsController@show')->name('doctors.show');


Route::get('/home', 'HomeController@index')->name('home');
