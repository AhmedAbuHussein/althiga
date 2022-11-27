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

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/language/{lang}', [App\Http\Controllers\Admin\HomeController::class, 'change_lang'])->name('change.lang');
    Route::post('/change-mode', [App\Http\Controllers\Admin\HomeController::class, 'change_mode'])->name('change.mode');
    //Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
});