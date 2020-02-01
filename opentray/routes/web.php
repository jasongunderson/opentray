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
    return view('home');
});

Route::get('/print', function () {
    return view('print');
});

Route::get('/residents', function () {
    return view('residents');
});

Route::get('/staff', function () {
    return view('staff');
});

Route::get('/UpdateResident', 'Controller@updateResident');