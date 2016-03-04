<?php

namespace TrezeVel\Tag\Providers;

use Illuminate\Support\ServiceProvider;

/**
* Provider das tags
*/
class TagServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/../../resources/migrations/' => base_path('database/migrations')], 'migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views/tag', 'trezevelTag');
        require __DIR__ . '/../routes.php';
    }

    public function register()
    {
        
    }
}
