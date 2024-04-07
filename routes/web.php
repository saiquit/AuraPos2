<?php

use App\Http\Controllers\Web\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.dashboard');

Route::group([
    'namespace' => 'App\Http\Controllers\Web',
    'as' => 'app.',
    // 'middleware' => ['web'],
    'prefix' => 'app',    
], function () {
    Route::group([
        'as' => 'stores.',
        'prefix' => 'stores',
    ], function () {
        Route::get('/', 'StoreController@index')->name('index');
        Route::get('/{id}', 'StoreController@show')->name('show');
    });
    Route::group([
        'as' => 'products.',
        'prefix' => 'products'
    ], function () {
        Route::get('/', 'ProductController@index')->name('index');
        Route::get('/{id}', 'ProductController@show')->name('show');
    });
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
