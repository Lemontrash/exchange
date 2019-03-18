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

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/',             'HomeController@showHome')                  ->name('home');
Route::get('/profile',      'HomeController@showProfileSettings')       ->name('profileSettings');
Route::get('/faq',          'HomeController@showFaq')                   ->name('faq');
Route::get('/filesHistory', 'HomeController@showFilesHistory')          ->name('filesHistory');
Route::get('/password',     'HomeController@showPasswordResetViaEmail') ->name('forgotPassword');
Route::get('/contactUs',    'HomeController@showContactUsForm')         ->name('contactUs');
Route::get('/logout',       'HomeController@logout')                    ->name('logout');
Route::post('/contactUs',   'MessageController@send')                   ->name('sendMessage');

Route::get('/getPdfFromProfile/{id}',       'PdfController@getPdfFromProfile')         ->name('getPdfFromProfile');

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

            Route::get('/uploadFiles', function () {
                return view('uploadFiles',
                    [
                        'ajaxUrl' => '/api/verificate-files'
                    ]
                );
            });


Route::post('/changePassword','PasswordController@changePassword')->name('changePassword');
Route::post('/changePersonalInfo','UserController@changePersonalInfo')->name('changePersonalInfo');


Route::get('/pdf', 'PdfController@show')->name('pdf');
Route::post('/pdf', 'PdfController@generate')->name('pdf-createView');



Route::post('/forgot', 'MailController@forgotPassword')->name('forgot');

Route::get('/files',function (){
    return view('filesVerify');
})->name('test');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
