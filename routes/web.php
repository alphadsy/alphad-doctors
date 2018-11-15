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


/* Questions
======================*/
Route::get('questions', 'QuestionsController@index')->name('questions.index');

Route::get('questions/create', 'QuestionsController@create')->name('questions.create');
Route::post('questions', 'QuestionsController@store')->name('questions.store');

Route::get('questions/search', 'QuestionsController@search')->name('questions.search');

Route::get('/questions/{question}/edit', 'QuestionsController@edit')->name('questions.edit');
Route::patch('/questions/{question}', 'QuestionsController@update')->name('questions.update');

Route::get('/questions/{question}', 'QuestionsController@show')->name('questions.show');


/* Articles
======================*/
Route::get('articles', 'ArticlesController@index')->name('articles.index');

Route::get('articles/create', 'ArticlesController@create')->name('articles.create');
Route::post('articles', 'ArticlesController@store')->name('articles.store');

Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::patch('/articles/{article}', 'ArticlesController@update')->name('articles.update');

Route::get('articles/search', 'ArticlesController@search')->name('articles.search');

Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');

Route::get('/home', 'HomeController@index')->name('home');
