<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module = new \App\Models\Module([
            'name' => 'Blog',
            'icon' => 'fa fa-blog',
            'web_route' => 'web.blog.index',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Portfolio',
            'icon' => 'fa fa-th',
            'web_route' => 'web.portfolio.index',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Contact',
            'icon' => 'fa fa-phone-alt',
            'web_route' => 'web.contact.index',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'About',
            'icon' => 'fa fa-user-astronaut',
            'web_route' => 'web.about.index',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Users',
            'icon' => 'fa fa-user-friends',
            'web_route' => 'module',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Menus',
            'icon' => 'fa fa-list-alt',
            'web_route' => 'module',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Roles',
            'icon' => 'fa fa-user-cog',
            'web_route' => 'module',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Tags',
            'icon' => 'fa fa-tags',
            'web_route' => 'module',
            'admin_route' => 'module',
        ]);
        $module->save();

        

    }
}
