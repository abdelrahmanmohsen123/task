<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

 Route::group(
    [

    ],
    function () {        
        // Dashboard backend
        Route::group(['middleware' => 'auth'], function () {
            
            // Dashboard backend
            Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard.index');
            
            
            Route::resource('dashboard/user', UserController::class);
            Route::resource('dashboard/category', CategoryController::class);
            Route::resource('dashboard/post', PostController::class);
            // front website
            Route::get('/', [App\Http\Controllers\HomeController::class, 'main'])->name('main');
            Route::get('/post/{id}', [HomeController::class, 'post'])->name('front.post');
            Route::post('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');

        });
});

