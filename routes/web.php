<?php

Auth::routes(['verify' => true]);

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Base routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/verify', function (){
    return view('auth.verify');
})->middleware('verified')->name('pdf');
Route::get('/logout', function (){
    if (\Illuminate\Support\Facades\Auth::check()){
        \Illuminate\Support\Facades\Auth::logout();
    }
    return back();
})->name('test');
Route::get('/password', function (){
    return view('auth.retrieveEmail');
})->name('retrieve');
Route::get('/files',function (){
    return view('filesVerify');
})->name('test');
Route::get('/profile',function (){
    return view('profileSettings');
})->name('test');


Route::get('/FilesHistory',function (){
    return view('profileFilesHistory');
})->name('FilesHistory');



Route::post('/files', 'UserController@store')->name('files');


// Gets
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pdf', 'PdfController@show')->name('pdf');
//Route::get('/pdf1', 'PdfController@show')->name('pdf');
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::get('/contactUs','MessageController@showMessageForm');

Route::get('/test', 'Test@test')->name('test');


//Posts

Route::post('/forgot', 'MailController@forgotPassword')->name('forgot');
Route::post('/pdf', 'PdfController@generate')->name('pdf-createView');
Route::post('/changePssword', 'passwordController@changePassword')->name('changePassword')->middleware('verified');
Route::post('/send', 'MessageController@send')->name('send');

// Admin
Route::get('/admin/filesQueue', 'AdminController@showFilesQueue')->name('verificationQueue');
Route::get('/admin/members', 'AdminController@showMembers')->name('members');
Route::get('/admin/approve/{id}', 'AdminController@approve')->name('approve');
Route::get('/admin/disapprove/{id}', 'AdminController@disapprove')->name('disapprove');
Route::get('/admin/getPdf/{id}', 'AdminController@getPdf')->name('getPdf');
Route::get('/admin/delete/{id}', 'AdminController@delete')->name('deleteFromQueue');
Route::get('/admin/messages', 'AdminController@showMessages')->name('messages');
Route::get('/admin/members', 'AdminController@showMembers')->name('members');
Route::get('/admin/accountVerificationFiles', 'AdminController@showAccountVerifictionFiles')->name('showAccVer');
Route::get('/admin/download/{id}', 'AdminController@downloadAccountVerificationFiles')->name('downloadById');


//======================================================================================================================
