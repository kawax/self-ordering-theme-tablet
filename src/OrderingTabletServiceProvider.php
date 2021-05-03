<?php

namespace Revolution\Ordering\Theme\Tablet;

use Illuminate\Support\ServiceProvider;

class OrderingTabletServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => $this->app->resourcePath('views/vendor/ordering-theme'),
            ], 'ordering-theme-tablet');
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ordering-theme');
    }
}
