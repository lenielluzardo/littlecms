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
            'name' => 'admin_main_navigation',
        ]);
        $menu->save();

        $modules = \App\Models\Module::all();
        $header = \App\Models\Menu::where('name', 'admin_main_navigation')->first();
        $header->modules()->sync($modules);
       
        $menu = new \App\Models\Menu([
            'name' => 'web_main_navigation',
        ]);
        $menu->save();
        \App\Models\Menu::where('name', 'web_main_navigation')->first()->modules()->sync([1, 2, 3, 4]);

        $menu = new \App\Models\Menu([
            'name' => 'web_socialmedia',
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name' => 'Github',
            'url' => config('app.admin.social.github'),
            'parent_id' => 3
         ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name' => 'Behance',
            'url' => config('app.admin.social.behance'),
            'parent_id' => 3
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name' => 'LinkedIn',
            'url' => config('app.admin.social.linkedin'),
            'parent_id' => 3
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name' => 'Youtube',
            'url' => config('app.admin.social.youtube'),
            'parent_id' => 3
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name' => 'Twitter',
            'url' => config('app.admin.social.twitter'),
            'parent_id' => 3
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name' => 'Instagram',
            'url' => config('app.admin.social.instagram'),
            'parent_id' => 3
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name' => 'Facebook',
            'url' => config('app.admin.social.facebook'),
            'parent_id' => 3
        ]);
        $menu->save();
    }
}
