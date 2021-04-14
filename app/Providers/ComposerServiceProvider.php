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
        View::composer('partial.notification', \App\Composers\NotificationComposer::class);
        View::composer('partial.header', \App\Composers\HeaderComposer::class);
        View::composer('admin.header', \App\Composers\HeaderComposer::class);
        View::composer('partial.footer', \App\Composers\FooterComposer::class);
        View::composer('about.description', \App\Composers\AboutComposer::class);
    }
}
