<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\BlogTitleAdminController;

// Route::group(['prefix' => '/'], function () {
//     Route::get('', [RoutingController::class, 'index'])->name('root');
//     Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
//     Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
//     Route::get('{any}', [RoutingController::class, 'root'])->name('any');
// });

Route::prefix('admin-panel')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    // Additional admin routes
    // Route::get('/blog-details', [BlogAdminController::class, 'index'])->name('blog-admin');
    // Route::get('/create-blog-details', [BlogAdminController::class, 'create'])->name('blog-create');

    // Route::get('/blogs', [BlogTitleAdminController::class, 'index'])->name('blog-title-admin');
    // Route::get('/create-blog', [BlogTitleAdminController::class, 'create'])->name('blog-title-create');
});

Route::resource('blog',BlogTitleAdminController::class);
Route::resource('blog-details',BlogAdminController::class);

//front end
Route::get('/', [BlogController::class, 'index'])->name('root');
Route::resource('blogs', BlogController::class);

Route::group(['prefix' => '/'], function () {
    
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    // Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});


// Route::get('/aa', function(){
//     return view('admin.blogs');
// } );
