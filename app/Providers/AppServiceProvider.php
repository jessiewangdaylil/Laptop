<?php

namespace App\Providers;

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
        //
        View()->share('global','Hello');
        $date = Carbon::now()->local('zh-tw');

        View()->composer(['album.*'],function($view){
            $view->with('album_test','Date 2022 / 11 / 25');

        });
    }
}