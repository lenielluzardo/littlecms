<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new \App\Models\Menu([
            'title' => 'admin_header',
            'section_id' => 1,
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'main',
            'section_id' => 1,
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'aside',
            'section_id' => 1,
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'footer',
            'section_id' => 1,
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'user_header',
            'section_id' => 2,
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'main',
            'section_id' => 2,
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'aside',
            'section_id' => 2,
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'social_media',
            'section_id' => 2,
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Blog',
            'route_name' => 'blog',
            'section_id' => 2,
            'parent_id' => 5
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Software',
            'route_name' => 'portfolio',
            'url' => 'software',
            'section_id' => 2,
            'parent_id' => 5
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Animation',
            'route_name' => 'portfolio',
            'url' => 'animation',
            'section_id' => 2,
            'parent_id' => 5
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Illustration',
            'route_name' => 'portfolio',
            'url' => 'illustration',
            'section_id' => 2,
            'parent_id' => 5
        ]);
        $menu->save();


        $menu = new \App\Models\Menu([
            'title' => 'About',
            'route_name' => 'about',
            'url' => '',
            'section_id' => 2,
            'parent_id' => 5
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Contact',
            'route_name' => 'contact',
            'url' => '',
            'section_id' => 2,
            'parent_id' => 5
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Github',
            'url' => config('app.admin.social.github'),
            'section_id' => 2,
            'parent_id' => 8
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Behance',
            'url' => config('app.admin.social.behance'),
            'section_id' => 2,
            'parent_id' => 8
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'LinkedIn',
            'url' => config('app.admin.social.linkedin'),
            'section_id' => 2,
            'parent_id' => 8
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Youtube',
            'url' => config('app.admin.social.youtube'),
            'section_id' => 2,
            'parent_id' => 8
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Twitter',
            'url' => config('app.admin.social.twitter'),
            'section_id' => 2,
            'parent_id' => 8
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Instagram',
            'url' => config('app.admin.social.instagram'),
            'section_id' => 2,
            'parent_id' => 8
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Facebook',
            'url' => config('app.admin.social.facebook'),
            'section_id' => 2,
            'parent_id' => 8
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Entries',
            'route_name' => 'entries',
            'url' => 'entries',
            'section_id' => 1,
            'parent_id' => 1
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'title' => 'Menus',
            'route_name' => 'menus',
            'url' => 'menus',
            'section_id' => 1,
            'parent_id' => 1
        ]);
        $menu->save();
    }
}
