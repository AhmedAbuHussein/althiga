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

    Route::resource("accreditations", \App\Http\Controllers\Admin\AccreditationController::class);
    Route::resource("categories", \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource("galleries", \App\Http\Controllers\Admin\GalleryController::class);
    Route::resource("partners", \App\Http\Controllers\Admin\PartnerController::class);
    Route::resource("sliders", \App\Http\Controllers\Admin\SliderController::class);
    Route::resource("admins", \App\Http\Controllers\Admin\AdminController::class)->except(['show']);
    Route::resource("tours", \App\Http\Controllers\Admin\TourController::class);
    Route::resource("team", \App\Http\Controllers\Admin\TeamController::class);

    Route::group(['prefix'=> "contacts", 'as'=> "contacts."], function() {
        Route::get("/", [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('index');
        Route::get("{contact}/show", [\App\Http\Controllers\Admin\ContactController::class, 'show'])->name('show');
        Route::post("mails/{contact}/send", [\App\Http\Controllers\Admin\ContactController::class, 'send'])->name('mail');
        Route::delete("{contact}/destroy", [\App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('destroy');
    });


    Route::group(['prefix'=> "subscribes", 'as'=> "subscribes."], function() {
        Route::get("/", [\App\Http\Controllers\Admin\SubscribeController::class, 'index'])->name('index');
        Route::delete("{subscribe}/destroy", [\App\Http\Controllers\Admin\SubscribeController::class, 'destroy'])->name('destroy');
        Route::get("/mails", [\App\Http\Controllers\Admin\SubscribeController::class, 'mails'])->name('mails');
        Route::post("/mails", [\App\Http\Controllers\Admin\SubscribeController::class, 'send']);
        Route::post("/users", [\App\Http\Controllers\Admin\SubscribeController::class, 'users'])->name('users');
    });
});