<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('layouts.partials.header', function($view) {
            $notifications = [];
            if(auth()->check()){
                $notifications = auth()->user()->unreadNotifications;
            }
            $view->with(['_notifys'=> $notifications ?? []]);
        });

        view()->composer(['layouts.admin', 'index', 'SEO.index', 'admin.setting.index', 'layouts.website'], function($view) {
            $settings = Cache::remember("SETTING", Carbon::now()->addDays(6), function(){
                return \App\Models\Setting::get();
            });
            $view->with(['settings'=> $settings]);
        });

        view()->composer(['layouts.website.header'], function($view) {
            $_categories = Cache::remember("CATEGORIES", Carbon::now()->addDays(30), function(){
                return \App\Models\Category::where("show_in_menu", 1)->withCount("courses")->with(['courses'=> function($query){
                    $query->where('show_in_menu', 1)->inRandomOrder();
                }])->orderBy("courses_count", "DESC")->get();
            });
            $_courses = Cache::remember("COURSES", Carbon::now()->addDays(30), function(){
                return Course::where('main_header', "1")->get();
            });
            $view->with(['_categories'=> $_categories, '_courses'=> $_courses]);
        });

        view()->composer(['layouts.website.footer'], function($view) {
           
            $_courses = Cache::remember("COURSES", Carbon::now()->addDays(30), function(){
                return Course::where('main_header', "1")->get();
            });
            $_popular = Course::withCount('seens')->orderBy('seens_count', 'desc')->limit(3)->get();
            $view->with(['_popular'=> $_popular, '_courses'=> $_courses]);
        });
        


        // try{
        //     if(Schema::hasTable('settings')){
        //         $settings = Setting::firstOrCreate();
        //         View::share('settings', $settings);
        //     }
        // }catch(\Exception $e){}
        
    }
}
