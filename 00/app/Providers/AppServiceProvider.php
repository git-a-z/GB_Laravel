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
        $menu = [
            [
                'title' => 'home',
                'alias' => 'home',
            ],
            [
                'title' => 'categories',
                'alias' => 'category::catalog',
            ],
            [
                'title' => 'news',
                'alias' => 'news::catalog',
            ],
        ];

        \View::share('menu', $menu);
    }
}
