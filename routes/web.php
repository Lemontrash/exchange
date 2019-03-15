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

Route::get('/profile', function () {
    return view('profileSettings');
});
Route::get('/uploadFiles', function () {
    return view('uploadFiles',
        [
            'ajaxUrl' => '/api/verificate-files'
        ]
    );
});
Route::get('/profile/files-history', function () {
    return view('profileFilesHistory');
});

Auth::routes();
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

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
Route::get('/files',function (){
    return view('filesVerify');
})->name('test');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');