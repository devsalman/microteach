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

Route::get('/', function()
{
	return View::make('hello');
});

/** Routes for account features */
Route::get('/account/login', function()
{
    return View::make('login');
});

Route::post('/account/login', 'AccountController@login');

/** Routes for admin features */
Route::get('/admin/dashboard', function()
{
    return View::make('admin/dashboard');
});

/** Rotues for master data */
Route::get('/master/province', 'ProvinceController@index');
