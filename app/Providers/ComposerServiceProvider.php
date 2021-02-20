<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;



class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('partials.header', \App\Composers\HeaderComposer::class);
        View::composer('about.description', \App\Composers\AboutComposer::class);
        View::composer('partials.notification', \App\Composers\NotificationComposer::class);
    }
}
