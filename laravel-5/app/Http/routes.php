<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localizationRedirect', 'localeSessionRedirect' ]
    ],
    function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', 'WelcomeController@index');
    Route::get('/home', 'racesController@index');
    Route::get('contact', 'WelcomeController@contact');
    Route::get('participations', 'ParticipationsController@index');
    Route::post('participations', 'ParticipationsController@store');

//  Route::get('users', 'UsersController@index');
//  Route::post('users', 'UsersController@store');

    Route::resource('users', 'UsersController');
    Route::resource('races', 'RacesController');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
