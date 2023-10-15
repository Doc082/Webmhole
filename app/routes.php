<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
use Illuminate\Database\Eloquent\Model;

Route::get('/', function()
{
	return View::make('index');
	
});

Route::get('/home', function()
{
	return View::make('index');
	
});

Route::get('/whool/{cerca}', 'WoleController@cerca');

Route::post('/whole', 'WoleController@index');

Route::get('/admin', function()
{
	return View::make('login');
});

Route::post('/admin', 'WoleController@admin');

Route::post('/register', 'WoleController@registra');

Route::get('/adminsuccess', ['as' => 'adminsuccess', 'uses' => function()
{
	$view = View::make('/admin');
	$view->success='ok';
	return $view;	
}]);

Route::get('/whole', function()
{
	return View::make('whole');
});

Route::get('/crawler', 'WoleController@crawl');
