<?php

use Illuminate\Support\Facades\Route;
use OrbtUI\Mechanisms\FrontendAssets;

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

Route::controller(FrontendAssets::class)->prefix('/orbtui')->group(function () {

    Route::get('/css/{route?}', 'styles')->where('route', '.*');

    Route::get('/js/{route?}', 'scripts')->where('route', '.*');

    Route::get('/fonts/{route?}', 'fonts')->where('route', '.*');

    Route::get('/images/{route?}', 'images')->where('route', '.*');

});
