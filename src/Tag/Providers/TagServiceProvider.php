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
    }

    public function register()
    {
        
    }
}
