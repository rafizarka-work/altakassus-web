<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect','localizationRedirect','localeViewPath'],
], function () {

    Route::view('/', 'index', ['ns' => 'common'])->name('index');
    Route::view('/contractors', 'section', ['ns' => 'contracting'])->name('contractors');

    Route::view('/conditioning', 'section', ['ns' => 'hvac'])->name('conditioning');

    Route::post('/contact/send', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
});
