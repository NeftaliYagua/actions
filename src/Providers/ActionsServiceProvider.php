<?php

namespace LaravelSchema\Actions;

use Illuminate\Support\ServiceProvider;

class ActionsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/actions.php' => config_path('actions.php'),
        ]);
    }
    public function register()
    {
        
    }
}