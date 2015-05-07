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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect','localizationRedirect']
    ],
    function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', 'WelcomeController@index');
    Route::get('/contact', 'WelcomeController@contact');

    Route::get('/participations/{id}/show', 'ParticipationsController@show');
    Route::get('/results/{id}/show', 'ResultsController@show');
    Route::resource('users', 'UsersController');
    Route::resource('races', 'RacesController');
    Route::get('users/search/autocomplete', 'SearchController@autocomplete');

});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

