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

Route::resource('residents', 'ResidentController');

Route::resource('staff', 'StaffController');

Route::get('print', 'PrintController@index')->name('print');

Route::get('print/cards', 'PrintController@cards')->name('print/cards');