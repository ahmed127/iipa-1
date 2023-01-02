<?php

namespace App\Providers;

use App\Models\Information;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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
        try {
            $data['information_app'] = Information::first();
            View::share($data);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
