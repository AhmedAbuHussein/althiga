<?php

namespace App\Providers;

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

        Schema::defaultStringLength(191);

        try{
            if(Schema::hasTable('settings')){
                $settings = \App\Models\Setting::first();
                View::share('settings', $settings);
            }
        }catch(\Exception $e){}
        
    }
}
