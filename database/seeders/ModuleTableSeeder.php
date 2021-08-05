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
            'web_route' => 'web.blog.index',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Portfolio',
            'web_route' => 'web.portfolio.index',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Contact',
            'web_route' => 'web.contact.index',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'About',
            'web_route' => 'web.about.index',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Users',
            'web_route' => 'module',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Menus',
            'web_route' => 'module',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Roles',
            'web_route' => 'module',
            'admin_route' => 'module',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Tags',
            'web_route' => 'module',
            'admin_route' => 'module',
        ]);
        $module->save();

        

    }
}
