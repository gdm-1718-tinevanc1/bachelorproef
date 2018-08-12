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

Route::get('/', 'HomeController@index');


Route::resource('diseases', 'DiseasesController');
Route::get('diseases/{disease}/delete', 'DiseasesController@delete');

Route::resource('type_diseases', 'TypeDiseasesController');
Route::get('type_diseases/{type_disease}/delete', 'TypeDiseasesController@delete');
Route::get('type_diseases/deleteImage/{image}', 'TypeDiseasesController@deleteImage');

Route::resource('devices', 'DevicesController');
Route::get('devices/{device}/delete', 'DevicesController@delete');
Route::get('devices/deleteImage/{image}', 'DevicesController@deleteImage');

Route::resource('practitioners', 'PractitionersController');
Route::get('practitioners/{practitioner}/delete', 'PractitionersController@delete');

Route::resource('askpractitioners', 'AskPractitionersController');
Route::get('askpractitioners/{askpractitioner}/delete', 'AskPractitionersController@delete');

Route::resource('rights', 'RightsController');
Route::get('rights/{right}/delete', 'RightsController@delete');

Route::resource('contact', 'ContactController');
Route::get('contact/{contact}/delete', 'ContactController@delete');

Route::resource('symptoms', 'SymptomsController');
Route::get('symptoms/{symptom}/delete', 'SymptomsController@delete');
Route::get('symptoms/deleteImage/{image}', 'SymptomsController@deleteImage');

Route::resource('users', 'UsersController');
Route::get('users/{user}/delete', 'UsersController@delete');

Route::resource('news', 'NewsController');
Route::get('news/{news}/delete', 'NewsController@delete');

Route::resource('exercisesexamples', 'ExercisesexamplesController');
Route::get('exercisesexamples/{exercisesexample}/delete', 'ExercisesexamplesController@delete');
Route::get('exercisesexamples/deleteImage/{image}', 'ExercisesexamplesController@deleteImage');

Route::resource('exercisetherapies', 'ExercisetherapiesController');
Route::get('exercisetherapies/{exercisetherapy}/delete', 'ExercisetherapiesController@delete');
Route::get('exercisetherapies/deleteImage/{image}', 'ExercisetherapiesController@deleteImage');

Route::resource('manualtherapies', 'ManualtherapiesController');
Route::get('manualtherapies/{manualtherapy}/delete', 'ManualtherapiesController@delete');

Route::resource('types/devices', 'TypeDevicesController');
Route::get('types/devices/{type_device}/delete', 'TypeDevicesController@delete');

Route::resource('types/practitioners', 'TypePractitionersController');
Route::get('types/practitioners/{type_practitioner}/delete', 'TypePractitionersController@delete');

Route::resource('types/exercisesexamples', 'TypeExercisesexamplesController');
Route::get('types/exercisesexamples/{type_exercisesexample}/delete', 'TypeExercisesexamplesController@delete');

Route::resource('types/exercisetherapies', 'TypeExercisetherapiesController');
Route::get('types/exercisetherapies/{type_exercisetherapy}/delete', 'TypeExercisetherapiesController@delete');

Route::resource('types/news', 'TypeNewsController');
Route::get('types/news/{type_new}/delete', 'TypeNewsController@delete');

Route::resource('types/agencies', 'TypeAgenciesController');
Route::get('types/agencies/{type_agency}/delete', 'TypeAgenciesController@delete');


Route::get('auth/logout', 'Auth\LoginController@logout');

// Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Auth::routes();
