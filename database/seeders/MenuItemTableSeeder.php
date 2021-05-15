<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menuItem = new \App\Models\MenuItem([
            'title' => 'Blog',
            'route_name' => 'blog',
            'url' => '',
            'menu_id' => 2,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Software',
            'route_name' => 'portfolio',
            'url' => "software",
            'menu_id' => 2,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Animation',
            'route_name' => 'portfolio',
            'url' => "animation",
            'menu_id' => 2,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Illustration',
            'route_name' => 'portfolio',
            'url' => "illustration",
            'menu_id' => 2,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'About',
            'route_name' => 'about',
            'url' => '',
            'menu_id' => 2,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Contact',
            'route_name' => 'contact',
            'url' => '',
            'menu_id' => 2,
        ]);
        $menuItem->save();


        $menuItem = new \App\Models\MenuItem([
            'title' => 'Github',
            'route_name' => 'social',
            'url' => config('app.admin.social.github'),
            'menu_id' => 3,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Behance',
            'route_name' => 'social',
            'url' => config('app.admin.social.behance'),
            'menu_id' => 3,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'LinkedIn',
            'route_name' => 'social',
            'url' => config('app.admin.social.linkedin'),
            'menu_id' => 3,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Youtube',
            'route_name' => 'social',
            'url' => config('app.admin.social.youtube'),
            'menu_id' => 3,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Twitter',
            'route_name' => 'social',
            'url' => config('app.admin.social.twitter'),
            'menu_id' => 3,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Instagram',
            'route_name' => 'social',
            'url' =>  config('app.admin.social.instagram'),
            'menu_id' => 3,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Facebook',
            'route_name' => 'social',
            'url' => config('app.admin.social.facebook'),
            'menu_id' => 3,
        ]);
        $menuItem->save();


    }
}
