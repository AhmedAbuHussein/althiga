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

Auth::routes(['verify' => true, 'register' => false]);

Route::group(['middleware' => ['auth', 'verified'], 'prefix'=> "dashboard", 'as'=> 'admin.'], function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::post('/change-mode', [App\Http\Controllers\Admin\HomeController::class, 'change_mode'])->name('change.mode');

    Route::group(["prefix"=> "profile", 'as'=> "profile."], function(){
        Route::get("/", [\App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('index');
        Route::post("update", [\App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('update');
    });


    Route::resource("accreditations", \App\Http\Controllers\Admin\AccreditationController::class);
    Route::resource("statistics", \App\Http\Controllers\Admin\StatisticsController::class)->only(['index', 'show', 'destroy']);
    Route::resource("categories", \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource("terms", \App\Http\Controllers\Admin\InstituteTermController::class);
    Route::resource("privacies", \App\Http\Controllers\Admin\CourseTermController::class);
    Route::resource("galleries", \App\Http\Controllers\Admin\GalleryController::class);
    Route::resource("partners", \App\Http\Controllers\Admin\PartnerController::class);
    Route::resource("sliders", \App\Http\Controllers\Admin\SliderController::class);
    Route::resource("courses", \App\Http\Controllers\Admin\CourseController::class);
    Route::resource("admins", \App\Http\Controllers\Admin\AdminController::class)->except(['show']);
    Route::resource("extra", \App\Http\Controllers\Admin\ExtraController::class);
    Route::resource("roles", \App\Http\Controllers\Admin\RoleController::class);
    Route::resource("tours", \App\Http\Controllers\Admin\TourController::class);
    Route::resource("team", \App\Http\Controllers\Admin\TeamController::class);
    Route::resource("tags", \App\Http\Controllers\Admin\TagController::class)->except(['show']);

    Route::get('statistics/destroy/all', [\App\Http\Controllers\Admin\StatisticsController::class, 'delete'])->name('statistics.delete');
    Route::post('statistics/destroy/all', [\App\Http\Controllers\Admin\StatisticsController::class, 'delete_post']);
    
    Route::get('statistics/generate/pdf', [\App\Http\Controllers\Admin\StatisticsController::class, 'generatepdf'])->name('statistics.pdf');
    

    Route::group(["prefix"=> "courses/{course}"], function(){
        Route::resource("contents", \App\Http\Controllers\Admin\ContentController::class)->except('show');
        Route::resource("contents/{content}/items", \App\Http\Controllers\Admin\ItemController::class)->except('show');
    });

    Route::resource("{type}/{id}/targets", \App\Http\Controllers\Admin\TargetController::class)->except('show');

    Route::group(['prefix'=> "setting", 'as'=> "setting."], function() {
        Route::get("/", [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('index');
        Route::put("update", [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('update');
    });

    Route::group(['prefix'=> "notifications", 'as'=> "notifications."], function() {
        Route::get("/", [\App\Http\Controllers\Admin\NotificationController::class, 'index'])->name('index');
        Route::get("/read", [\App\Http\Controllers\Admin\NotificationController::class, 'mard_as_read'])->name('read');
        Route::post("{id}/read", [\App\Http\Controllers\Admin\NotificationController::class, 'mark_read'])->name('mark');
        Route::delete("{id}/destroy", [\App\Http\Controllers\Admin\NotificationController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix'=> "about", 'as'=> "about."], function() {
        Route::get("/", [\App\Http\Controllers\Admin\AboutController::class, 'index'])->name('index');
        Route::get("{about}/edit", [\App\Http\Controllers\Admin\AboutController::class, 'edit'])->name('edit');
        Route::put("{about}/update", [\App\Http\Controllers\Admin\AboutController::class, 'update'])->name('update');
    });

    Route::group(['prefix'=> "contacts", 'as'=> "contacts."], function() {
        Route::get("/", [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('index');
        Route::get("{contact}/show", [\App\Http\Controllers\Admin\ContactController::class, 'show'])->name('show');
        Route::get("{contact}/chat", [\App\Http\Controllers\Admin\ContactController::class, 'chat'])->name('chat');
        Route::post("{contact}/chat", [\App\Http\Controllers\Admin\ContactController::class, 'chatstore']);
        Route::post("{contact}/close", [\App\Http\Controllers\Admin\ContactController::class, 'closed'])->name('close');

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