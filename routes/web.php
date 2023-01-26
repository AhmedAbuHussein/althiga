<?php

use App\Http\Controllers\RoutingController;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
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


Route::get('/artisan', function(){
    //Artisan::call("storage:link");
    Artisan::call("optimize:clear");
    //Artisan::call("migrate");
    return redirect()->route('index');
});

Route::group(['middleware'=> 'seen'], function() {

    Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
    Route::get('/about-us', [\App\Http\Controllers\IndexController::class, 'about'])->name('about');
    Route::get('/gallery', [\App\Http\Controllers\IndexController::class, 'gallery'])->name('gallery');
    Route::get('/contact-us', [\App\Http\Controllers\IndexController::class, 'contact'])->name('contact');
    Route::post('/contact-us', [\App\Http\Controllers\IndexController::class, 'contact_post']);
    
    Route::get('/virtual-tour', [\App\Http\Controllers\IndexController::class, 'tours'])->name('tours');
    Route::get('/valuable-customers', [\App\Http\Controllers\IndexController::class, 'partners'])->name('partners');
    Route::get('/accreditations-partnerships', [\App\Http\Controllers\IndexController::class, 'accreditations'])->name('accreditations');
    
    Route::get('courses-schedule', [\App\Http\Controllers\CourseController::class, 'index'])->name('courses.index');
    Route::get('courses/{slug}', [\App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');
    
    Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services');
    Route::get('services/{slug}', [\App\Http\Controllers\ServiceController::class, 'show'])->name('services.show');
});

Route::post('/subscribe', [\App\Http\Controllers\IndexController::class, 'subscribe'])->name('subscribe');

Route::get('chat', [\App\Http\Controllers\ConversationController::class, 'index'])->name('chat');
Route::post('chat', [\App\Http\Controllers\ConversationController::class, 'chat'])->name('chat');
Route::get('conversation/{ticket}', [\App\Http\Controllers\ConversationController::class, 'show'])->name('conversation');
Route::post('conversation/{ticket}', [\App\Http\Controllers\ConversationController::class, 'store']);



Route::get('/language/{lang}', function($lang){
    if(in_array($lang, ['en', 'ar'])){
        App::setLocale($lang);
        session()->put('locale', $lang);
    }
    return redirect()->back();
})->name('change.lang');