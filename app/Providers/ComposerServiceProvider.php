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
        View::composer('admin.partial.module_navigation', \App\Composers\Admin\ModuleNavigationComposer::class);


        View::composer('web.navigation.header', \App\Composers\Web\HeaderModulesComposer::class);
        View::composer('web.partial.socialmedia', \App\Composers\Web\SocialMediaComposer::class);
        View::composer('web.about.author', \App\Composers\Web\AuthorComposer::class);
    }
}
