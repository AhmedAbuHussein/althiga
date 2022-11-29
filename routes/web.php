<?php

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\App;
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
    App::setLocale('ar');
    session()->put('locale', 'ar');
    return view('welcome');
});

Route::get('/language/{lang}', function($lang){
    if(in_array($lang, ['en', 'ar'])){
        App::setLocale($lang);
        session()->put('locale', $lang);
    }
    return redirect()->back();
})->name('change.lang');


Route::view('locale/{locale?}', "comming-soon")->name('set-locale');

Route::get('/wpr-registration-download', [RoutingController::class, 'WPRRegistrationDownload'])->name('WPRRegistrationDownload');
Route::get('/{id?}', [RoutingController::class, 'Routing'])->name('routeName');
