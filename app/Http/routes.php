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

// Researcher Routes
Route::get('session', 'SessionController@home');
Route::get('session/add', 'SessionController@home');

// Subject Routes
Route::get('task', 'SubjectController@task');
Route::get('questionnaire/incoming', 'QuestionnaireController@incoming');

Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
