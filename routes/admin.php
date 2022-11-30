<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified'], 'prefix'=> "dashboard", 'as'=> 'admin.'], function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::post('/change-mode', [App\Http\Controllers\Admin\HomeController::class, 'change_mode'])->name('change.mode');

    Route::resource("categories", \App\Http\Controllers\Admin\CategoryController::class);
});