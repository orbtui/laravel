<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('orbtui.')->prefix('/orbtui')->group(function() {

    Route::name('css.')->prefix('/css')->group(function() {

        Route::get('plugins.css', function () {
            return response()->file(__DIR__.'/../dist/css/plugins.bundle.css');
        })->name('plugins');

        Route::get('styles.css', function () {
            return response()->file(__DIR__.'/../dist/css/style.bundle.css');
        })->name('styles');

    });

    Route::name('js.')->prefix('/js')->group(function() {

        Route::get('plugins.js', function () {
            return response()->file(__DIR__.'/../dist/js/plugins.bundle.js');
        })->name('plugins');

        Route::get('scripts.js', function () {
            return response()->file(__DIR__.'/../dist/js/scripts.bundle.js');
        })->name('scripts');

    });

});
