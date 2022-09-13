<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     */
    public function boot()
    {
        // Frontend
        View::composer('layouts.app', 'App\Composers\SettingComposer');
        View::composer('layouts.app2', 'App\Composers\SettingComposer');
        View::composer('layouts.topbar', 'App\Composers\SettingComposer');
        View::composer('layouts.navbar', 'App\Composers\SettingComposer');

    }

    /**
     * Register.
     */
    public function register()
    {
    }
}
