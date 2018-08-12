<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::group([
    'namespace' => 'API',
    'middleware' => 'cors'
], function(){
    $options = [
        'except' => [
            'create',
            'edit',
        ]
    ];

    Route::resource('diseases', 'DiseasesController', $options);
    Route::post('login', 'LoginController@login');

    Route::resource('users', 'UsersController', $options);
    Route::delete('users/destroy/{user}', 'UsersController@forceDelete', $options);

    Route::get('devices/type={type}', 'DevicesController@filter');
    Route::resource('devices', 'DevicesController', $options);
    //?type=type
    Route::resource('countries', 'CountriesController', $options);

    Route::resource('practitioners', 'PractitionersController', $options);
    Route::get('rights/type={type}', 'RightsController@filter');

    Route::resource('rights', 'RightsController', $options);
    Route::resource('symptoms', 'SymptomsController', $options);

    Route::resource('typepractitioners', 'TypepractitionersController', $options);
    Route::resource('faqs', 'FaqsController', $options);
    Route::get('news/last', 'NewsController@last');
    Route::get('news/type={type}', 'NewsController@filter');
    Route::resource('news', 'NewsController', $options);
    Route::resource('askpractitioners', 'AskPractitionersController', $options);
    Route::resource('contact', 'ContactController', $options);

    Route::get('exercisesexamples/type={type}', 'ExercisesexamplesController@filter');
    Route::resource('exercisesexamples', 'ExercisesexamplesController');
    Route::get('exercisetherapies/type={type}', 'ExercisetherapiesController@filter');
    Route::resource('exercisetherapies', 'ExercisetherapiesController');
    Route::resource('manualtherapies', 'ManualtherapiesController');


    Route::resource('typenews', 'TypenewsController', $options);
    Route::resource('typeexercisesexamples', 'TypeExercisesexamplesController', $options);
    Route::resource('typeexercisetherapies', 'TypeExercisetherapiesController', $options);
    Route::get('typeagencies/country={country_id}', 'TypeAgenciesController@filter');
    Route::resource('typeagencies', 'TypeAgenciesController', $options);

    Route::post('forgot/password', 'ForgotPasswordController@sendEmail');
    Route::post('reset/password', 'ResetPasswordController@process');

});
