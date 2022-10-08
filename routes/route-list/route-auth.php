<?php
// Auth Login and Auth Logout
Route::controller(App\Http\Controllers\Auth\LoginController::class)->group(function(){
    Route::get('login', 'showLoginForm')->name('login');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->name('logout');
});

// Auth Register
Route::controller(App\Http\Controllers\Auth\RegisterController::class)->group(function(){
    Route::get('register', 'showRegistrationForm')->name('register');
    Route::post('register', 'register');
});

// Auth Forgot Password
Route::controller(App\Http\Controllers\Auth\ForgotPasswordController::class)->group(function(){
    Route::get('password/reset', 'showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'sendResetLinkEmail')->name('password.email');
});

// Auth Reset Password
Route::controller(App\Http\Controllers\Auth\ResetPasswordController::class)->group(function(){
    Route::get('password/reset/{token}', 'showResetForm')->name('password.reset');
    Route::post('password/reset', 'reset')->name('password.update');
});

// Auth Confirm Password
Route::controller(App\Http\Controllers\Auth\ConfirmPasswordController::class)->group(function(){
    Route::get('password/confirm', 'showConfirmForm')->name('password.confirm');
    Route::post('password/confirm', 'confirm');
});

// Auth Verify Email
Route::controller(App\Http\Controllers\Auth\VerificationController::class)->group(function(){
    Route::get('email/verify', 'show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'verify')->name('verification.verify');
    Route::post('email/resend', 'resend')->name('verification.resend');
});