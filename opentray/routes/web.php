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
});

Route::resource('residents', 'ResidentController');

Route::get('print', 'PrintController@index');

Route::get('print/addqueue/{id}', 'PrintController@addqueue')->name('print/addqueue');

Route::get('print/cards', 'PrintController@cards')->name('print/cards');

Route::get('test', 'PrintController@test');