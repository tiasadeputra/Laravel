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



Route::get('/', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::group(array('before' => 'auth'), function()
{
Route::get('logout', array('uses' => 'HomeController@logout'));
 
// Route yang ingin diproteksi taruh disini
});
 
Route::get('login', array('uses' => 'HomeController@index'));
Route::post('login', array('uses' => 'HomeController@doLogin'));

//Route::get('dashboard',array('uses' => 'DashboardController@showProfile'));

Route::get('dashboard','DashboardController@showDashboard');
Route::get('mitra','MitraBisnisController@showMitraBisnis');


