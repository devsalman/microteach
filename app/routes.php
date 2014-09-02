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
Route::get('admin/master/province', 'ProvinceController@index');
Route::get('admin/master/city', 'CityController@index');
Route::get('admin/master/district', 'DistrictController@index');
Route::get('admin/master/village', 'VillageController@index');

/** Routes for ajax call */
Route::get('ajax/getDTProvinces', 'ProvinceController@ajaxDTGetProvinces');
Route::get('ajax/getDTCities', 'CityController@ajaxDTGetCities');
Route::get('ajax/getDTDistricts', 'DistrictController@ajaxDTGetDistricts');
Route::get('ajax/getDTVillages', 'VillageController@ajaxDTGetVillages');
