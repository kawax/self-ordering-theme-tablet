<?php

namespace Revolution\Ordering\Theme\Tablet;

use Illuminate\Support\ServiceProvider;

class OrderingTabletServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/ordering-tablet'),
            ], 'ordering-tablet-views');
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ordering-tablet');
    }
}
