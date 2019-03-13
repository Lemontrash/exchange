<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
});

Route::post('update', 'API\UserController@updatePersonalInfo');
Route::post('updateAvatar', 'API\UserController@updateAvatar');
Route::post('passwordChange', 'PasswordController@changePassword');
Route::post('ContactUs', 'MessageController@send');
Route::post('PDF', 'PdfController@generate');

// ==============================================
// Admin routes

Route::post('admin/downloadAccountVerificationFiles', 'AdminController@downloadAccountVerificationFiles');
Route::post('admin/approve', 'AdminController@approve');
Route::post('admin/disapprove', 'AdminController@disapprove');
Route::post('admin/delete', 'AdminController@delete');
Route::post('admin/getPdf', 'AdminController@getPdf');
