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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/pdf', function (){
//    return view('pdf');
//})->name('home');


Route::get('/pdf', 'PdfController@show')->name('pdf');
Route::post('/pdf', 'PdfController@generate')->name('pdf-createView');
Route::get('/pdf1', 'PdfController@show')->name('pdf');
Route::post('/login', 'Auth\LoginController@login')->name('loginpost');

Route::get('/test', 'Test@test')->name('test');