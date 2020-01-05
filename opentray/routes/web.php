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
/*
Route::get('/', function () {
    return view('home');
});
*/
/*
Route::get('/hello', function () {
    return 'hello world';
});
*/

/*
//Below will grabe whatever passed in after user and passes it into the function() passing dynamic values
Route::get('/user/{id}', function($id){
    return 'This is user '.$id;
});
*/
/*
// pages.about is used to find a view inside a folder 'pages'
Route::get('/about', function (){
    return view('pages.about');
});
*/

Route::get('/', 'PagesController@home');

Route::get('/index', 'PagesController@index');

Route::get('/about', 'PagesController@about');
