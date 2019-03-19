<?php

Auth::routes();



Route::get('/admin/new-users', 'AdminController@getUsersWithFiles');
//Basic Routes For Profile
Route::get('/',             'HomeController@showHome')                  ->name('home');
Route::get('/profile',      'HomeController@showProfileSettings')       ->name('profileSettings');
Route::get('/faq',          'HomeController@showFaq')                   ->name('faq');
Route::get('/filesHistory', 'HomeController@showFilesHistory')          ->name('filesHistory');
Route::get('/password',     'HomeController@showPasswordResetViaEmail') ->name('forgotPassword');
Route::get('/contactUs',    'HomeController@showContactUsForm')         ->name('contactUs');
Route::get('/deposit',       'HomeController@showDeposit')              ->name('deposit');
Route::get('/personalData',       'HomeController@showpersonalDataVerify')   ->name('personalData');
Route::get('/uploadFiles',  'HomeController@showUploadFiles')           ;
Route::get('/logout',       'HomeController@logout')                    ->name('logout');
Route::post('/contactUs',   'MessageController@send')                   ->name('sendMessage');

Route::post('/store',   'UserController@store')                         ->name('storeVerificationFiles');

Route::get('/getPdfFromProfile/{id}',       'PdfController@getPdfFromProfile')         ->name('getPdfFromProfile');


Route::get('/personalDataVerify', function(){
	return view('personalDataVerify');
});
Route::get('/exchange', function(){
	return view('profileExchange');
});

//Email Verification Routes
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');




Route::post('/uploadFiles', function () {
    return view('uploadFiles');
});


Route::post('/changePassword','PasswordController@changePassword')->name('changePassword');
Route::post('/changePersonalInfo','UserController@changePersonalInfo')->name('changePersonalInfo');




//Admin Routes
Route::post('/admin/approveId/{id}',      'AdminController@approveId')->name('approveId');
Route::post('/admin/approveSelfie/{id}',  'AdminController@approveSelfie')->name('approveSelfie');
Route::post('/admin/approveBank/{id}',    'AdminController@approveBank')->name('approveBank');
Route::post('/admin/approveDod/{id}',     'AdminController@approveDod')->name('approveDod');
Route::post('/admin/dismissId/{id}',      'AdminController@dismissId')->name('dismissId');
Route::post('/admin/dismissSelfie/{id}',  'AdminController@dismissSelfie')->name('dismissSelfie');
Route::post('/admin/dismissBank/{id}',    'AdminController@dismissBank')->name('dismissBank');
Route::post('/admin/dismissDod/{id}',     'AdminController@dismissDod')->name('dismissDod');
Route::post('/admin/downloadId/{id}',     'AdminController@downloadId')->name('downloadId');
Route::post('/admin/downloadSelfie/{id}', 'AdminController@downloadSelfie')->name('downloadSelfie');
Route::post('/admin/downloadBank/{id}',   'AdminController@downloadBank')->name('downloadBank');
Route::post('/admin/downloadDod/{id}',    'AdminController@downloadDod')->name('downloadDod');

Route::post('/admin/approvePdf/{id}',     'AdminController@approvePdf')->name('approvePdf');
Route::post('/admin/dismissPdf/{id}',     'AdminController@dismissPdf')->name('dismissPdf');
Route::post('/admin/downloadPdf/{id}',    'AdminController@downloadPdf')->name('downloadPdf');

Route::get('/admin/files',      'AdminController@showAccountVerifictionFiles');
//?????????????????????????????????????????????
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
