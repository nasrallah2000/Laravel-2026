<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->name('user.')->controller(AppController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('posts', 'posts')->name('posts');
});

Route::prefix('forms')->name('forms.')->controller(FormController::class)->group(function () {
    Route::get('form1','form1')->name('form1');
    Route::post('form1','form1_data')->name('form1');

    Route::get('form2','form2')->name('form2');
    Route::post('form2','form2_data')->name('form2');
});
