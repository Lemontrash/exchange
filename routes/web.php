<?php

Auth::routes();




//Basic Routes For Profile
Route::get('/',             'HomeController@showHome')                  ->name('home');
Route::get('/profile',      'HomeController@showProfileSettings')       ->name('profileSettings');
Route::get('/faq',          'HomeController@showFaq')                   ->name('faq');
Route::get('/filesHistory', 'HomeController@showFilesHistory')          ->name('filesHistory');
Route::get('/password',     'HomeController@showPasswordResetViaEmail') ->name('forgotPassword');
Route::get('/contactUs',    'HomeController@showContactUsForm')         ->name('contactUs');
Route::get('/uploadFiles',  'HomeController@showUploadFiles')           ;
Route::get('/logout',       'HomeController@logout')                    ->name('logout');
Route::post('/contactUs',   'MessageController@send')                   ->name('sendMessage');

Route::post('/store',   'UserController@store')                         ->name('storeVerificationFiles');

Route::get('/getPdfFromProfile/{id}',       'PdfController@getPdfFromProfile')         ->name('getPdfFromProfile');




//Email Verification Routes
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');




Route::post('/uploadFiles', function () {
    return view('uploadFiles', ['ajaxUrl' => '/api/verificate-files']);
});


Route::post('/changePassword','PasswordController@changePassword')->name('changePassword');
Route::post('/changePersonalInfo','UserController@changePersonalInfo')->name('changePersonalInfo');




//Admin Routes
//Route::post('/approveId/{id}',      'AdminController@changePassword')->name('approveId');
//Route::post('/approveSelfie/{id}',  'AdminController@changePassword')->name('approveSelfie');
//Route::post('/approveBank/{id}',    'AdminController@changePassword')->name('approveBank');
//Route::post('/approveDod/{id}',     'AdminController@changePassword')->name('approveDod');
//Route::post('/dismissId/{id}',      'AdminController@changePassword')->name('dismissId');
//Route::post('/dismissSelfie/{id}',  'AdminController@changePassword')->name('dismissSelfie');
//Route::post('/dismissBank/{id}',    'AdminController@changePassword')->name('dismissBank');
//Route::post('/dismissDod/{id}',     'AdminController@changePassword')->name('dismissDod');
//
//
////?????????????????????????????????????????????
//Route::post('/downloadPdf/{id}',    'PasswordController@changePassword')->name('changePassword');



// ?????????????????????????????????
Route::get('/pdf', 'PdfController@show')->name('pdf');
Route::post('/pdf', 'PdfController@generate')->name('pdf-createView');


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::post('/forgot', 'MailController@forgotPassword')->name('forgot');

Route::get('/admin', function () {
  return view('admin');
});
