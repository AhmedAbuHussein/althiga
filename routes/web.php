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

Route::get('/test', function(){
    $courses = Course::get();
   // return _splite_by_chuncks($courses, 2, 0);
   return \App\Models\Category::withCount("courses")->with(['courses'=> function($query){
        $query->where('is_popular', 1)->inRandomOrder();
    }])->has('courses')->orderBy("courses_count", "DESC")->get();
});

Route::get('/artisan', function(){
    Artisan::call("optimize:clear");
    // Artisan::call("storage:link");
    return 'done';
});


Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/about', [\App\Http\Controllers\IndexController::class, 'about'])->name('about');
Route::get('/gallery', [\App\Http\Controllers\IndexController::class, 'gallery'])->name('gallery');
Route::get('/contact-us', [\App\Http\Controllers\IndexController::class, 'contact'])->name('contact');
Route::get('/virtual-tour', [\App\Http\Controllers\IndexController::class, 'tours'])->name('tours');
Route::get('/valuable-customers', [\App\Http\Controllers\IndexController::class, 'partners'])->name('partners');
Route::get('/accreditations-partnerships', [\App\Http\Controllers\IndexController::class, 'accreditations'])->name('accreditations');

Route::get('courses', [\App\Http\Controllers\CourseController::class, 'index'])->name('courses.index');
Route::get('courses/{slug}', [\App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');

Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services');
Route::get('services/{slug}', [\App\Http\Controllers\ServiceController::class, 'show'])->name('services.show');


Route::get('/language/{lang}', function($lang){
    if(in_array($lang, ['en', 'ar'])){
        App::setLocale($lang);
        session()->put('locale', $lang);
    }
    return redirect()->back();
})->name('change.lang');


Route::view('locale/{locale?}', "comming-soon")->name('set-locale');

Route::get('/wpr-registration-download', [RoutingController::class, 'WPRRegistrationDownload'])->name('WPRRegistrationDownload');
Route::get('/{id?}', [RoutingController::class, 'Routing'])->middleware('seen')->name('routeName');
