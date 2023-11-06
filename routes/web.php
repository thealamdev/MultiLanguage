<?php

use App\Http\Controllers\ChangeLanguageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'Language'], function () {
    Route::controller(PostController::class)->group(function () {
        Route::get('/', [ChangeLanguageController::class, 'index']);
        Route::get('change-language/{lang}', [ChangeLanguageController::class, 'changeLanguage']);
        Route::prefix('post')->name('post.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
        });
    });
});
