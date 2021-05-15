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
        View::composer('admin.header', \App\Composers\SocialMediaComposer::class);
        View::composer('admin.header', \App\Composers\HeaderComposer::class);
        View::composer('admin.header', \App\Composers\WebSectionComposer::class);


        View::composer('user.header.navigation', \App\Composers\UserNavigationComposer::class);

        View::composer('user.footer.socialmedia', \App\Composers\SocialMediaComposer::class);

        // View::composer('user.header.header', \App\Composers\HeaderComposer::class);
        View::composer('user.content.about.description', \App\Composers\AboutComposer::class);
        // View::composer('user.footer.footer', \App\Composers\FooterComposer::class);
        View::composer('user.partial.notification', \App\Composers\NotificationComposer::class);
    }
}
