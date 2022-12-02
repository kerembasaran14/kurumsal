<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

    Route::get('/', function () {
        return view('admin.anasayfa');
    })->name('anasayfa');

    Route::view('/profile/edit', 'admin.profile.edit')->name('profile.edit');
    Route::view('/profile/password', 'admin.profile.password')->name('password.edit');
});
