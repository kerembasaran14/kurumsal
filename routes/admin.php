<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

    Route::get('/', function () {
        return view('admin.anasayfa');
    })->name('anasayfa');

});
