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
<<<<<<< HEAD
        //
=======
        if (env('APP_ENV') != 'local') {
            \URL::forceScheme('https');  
        } 
>>>>>>> ad5284e475cd5dfe0f0f7d9f7be2f3137d201097
    }
}
