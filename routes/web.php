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

        Route::name('fonts.')->prefix('/fonts')->group(function() {

            $headers = [
                'Content-Type' => 'font/woff2',
                'Expires' => strtotime('+1 year'),
                'Cache-Control' => 'public, max-age=31536000',
                'Last-Modified' => sprintf('%s GMT', gmdate('D, d M Y H:i:s', now()->getTimestamp())),
            ];

            Route::get('/{any}', function ($any) use ($headers) {
                return response()->file(__DIR__.'/../resources/theme/demo1/dist/css/fonts/' . $any, $headers);
            })->where('any', '.*');

        });

        $headers = [
            'Content-Type' => 'text/css; charset=utf-8',
            'Expires' => strtotime('+1 year'),
            'Cache-Control' => 'public, max-age=31536000',
            'Last-Modified' => sprintf('%s GMT', gmdate('D, d M Y H:i:s', now()->getTimestamp())),
        ];

        Route::get('styles.css', function () use ($headers) {
            return response()->file(__DIR__.'/../resources/theme/demo1/dist/css/style.bundle.css', $headers);
        })->name('styles');

        Route::get('plugins.css', function () use ($headers) {
            return response()->file(__DIR__.'/../resources/theme/demo1/dist/css/plugins.bundle.css', $headers);
        })->name('plugins');

    });

    Route::name('js.')->prefix('/js')->group(function() {

        $headers = [
            'Content-Type' => 'application/javascript; charset=utf-8',
            'Expires' => strtotime('+1 year'),
            'Cache-Control' => 'public, max-age=31536000',
            'Last-Modified' => sprintf('%s GMT', gmdate('D, d M Y H:i:s', now()->getTimestamp())),
        ];

        Route::get('scripts.js', function () use ($headers) {
            return response()->file(__DIR__.'/../resources/theme/demo1/dist/js/scripts.bundle.js', $headers);
        })->name('scripts');

        Route::get('plugins.js', function () use ($headers) {
            return response()->file(__DIR__.'/../resources/theme/demo1/dist/js/plugins.bundle.js', $headers);
        })->name('plugins');

    });

});
