<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->name('user.')->controller(AppController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('posts', 'posts')->name('posts');
});
