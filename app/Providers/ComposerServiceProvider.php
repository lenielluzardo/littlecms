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
        View::composer('admin.header.header', \App\Composers\Admin\HeaderComposer::class);
        View::composer('admin.header', \App\Composers\WebSectionComposer::class);

        View::composer('user.header.header', \App\Composers\Public\HeaderModulesComposer::class);
        View::composer('user.footer.socialmedia', \App\Composers\Public\SocialMediaComposer::class);

        View::composer('user.content.about.author', \App\Composers\Public\AuthorComposer::class);
        View::composer('user.partial.notification', \App\Composers\Public\NotificationComposer::class);

        View::composer('user.aside.ads', \App\Composers\Public\AdsComposer::class);
    }
}
