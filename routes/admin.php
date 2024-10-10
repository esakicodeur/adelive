<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        // Users
        Route::get('/', [UserController::class, 'index'])->name('index');
    });
});
