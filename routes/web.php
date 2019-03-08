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
//Route::post('/login', 'Auth\LoginController@login')->name('loginpost');
Route::get('/logout', function (){
    if (\Illuminate\Support\Facades\Auth::check()){
        \Illuminate\Support\Facades\Auth::logout();
    }
    redirect(back());
})->name('test');
Route::get('/password', function (){
    return view('auth.retrieveEmail');
})->name('retrieve');
Route::post('/forgot', 'MailController@forgotPassword')->name('forgot');

Route::get('/test', 'Test@test')->name('test');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');