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
        View::composer('admin.backend.auth.login2', 'App\Composers\SettingComposer');
        View::composer('admin.backend.layout.layout', 'App\Composers\SettingComposer');
        View::composer('layouts.footer', 'App\Composers\FooterComposer');
        View::composer('layouts.footer2', 'App\Composers\FooterComposer');

    }

    /**
     * Register.
     */
    public function register()
    {
    }
}
