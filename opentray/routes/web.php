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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('auth', 'AuthController@auth')->name('auth');

Route::get('signout', 'AuthController@signout')->name('signout');

Route::get('setPerm', 'AuthController@setPerm')->name('setPerm');

Route::group(['middleware' => 'custAuth'], function () {
    Route::resource('residents', 'ResidentController');

    Route::resource('staff', 'StaffController');

    Route::resource('foods', 'FoodController');

    Route::resource('facilities', 'FacilityController');

    Route::get('print', 'PrintController@index')->name('print');

    Route::get('print/cards', 'PrintController@cards')->name('print/cards');
});
