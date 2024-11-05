<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;

// Route::group(['prefix' => '/'], function () {
//     Route::get('', [RoutingController::class, 'index'])->name('root');
//     Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
//     Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
//     Route::get('{any}', [RoutingController::class, 'root'])->name('any');
// });

Route::group(['prefix' => '/'], function () {
    Route::get('', [BlogController::class, 'index'])->name('root');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    // Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});

Route::prefix('admin-panel')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    // Additional admin routes
});
