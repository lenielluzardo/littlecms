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
            'url' => "/blog",
            'menu_id' => 2,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Software',
            'route_name' => 'portfolio',
            'url' => "/portfolio/illustration",
            'menu_id' => 2,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Animation',
            'route_name' => 'portfolio',
            'url' => "/portfolio/animation",
            'menu_id' => 2,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Illustration',
            'route_name' => 'portfolio',
            'url' => "/portfolio/illustration",
            'menu_id' => 2,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Github',
            'route_name' => 'social',
            'url' => env('SOCIAL_GH'),
            'menu_id' => 3,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Behance',
            'route_name' => 'social',
            'url' => env('SOCIAL_BH'),
            'menu_id' => 3,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Youtube',
            'route_name' => 'social',
            'url' => env('SOCIAL_YT'),
            'menu_id' => 3,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Twitter',
            'route_name' => 'social',
            'url' => env('SOCIAL_TW'),
            'menu_id' => 3,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Instagram',
            'route_name' => 'social',
            'url' => env('SOCIAL_IG'),
            'menu_id' => 3,
        ]);
        $menuItem->save();

        $menuItem = new \App\Models\MenuItem([
            'title' => 'Facebook',
            'route_name' => 'social',
            'url' => env('SOCIAL_FB'),
            'menu_id' => 3,
        ]);
        $menuItem->save();


    }
}
