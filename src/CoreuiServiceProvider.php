<?php

namespace Iyottt\LaravelCoreui;

use Illuminate\Support\ServiceProvider;

class CoreuiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/config/coreui.php', 'coreui');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'coreui');
        $this->publishes([__DIR__.'/resources/assets' => public_path('vendor/coreui')], 'assets');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
