<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
|*************
| GET Routes *
|*************
*/

Route::get('/', [
	'as' => 'home', 
	'uses' => 'HomeController@home'
]);

Route::get('portfolio', [
	'as' => 'portfolio', 
	'uses' => 'HomeController@portfolio'
]);

Route::get('resume', [
	'as' => 'resume', 
	'uses' => 'HomeController@resume'
]);


Route::get('contact', [
	'as' => 'contact', 
	'uses' => 'ContactController@contact'
]);


/*
|**************
| POST Routes *
|**************
*/

Route::post('contact', [
	'as' => 'contact_form',
	'uses' => 'ContactController@ContactForm'
]);
