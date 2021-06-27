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
            'route' => 'blog',
            'url' => 'blog',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Portfolio',
            'route' => 'portfolio',
            'url' => 'portfolio',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Contact',
            'route' => 'contact',
            'url' => 'contact',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'About',
            'route' => 'about',
            'url' => 'about',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Users',
            'route' => 'module',
            'url' => 'users',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Menus',
            'route' => 'module',
            'url' => 'menus',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Entries',
            'route' => 'module',
            'url' => 'entries',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Roles',
            'route' => 'module',
            'url' => 'roles',
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'Tags',
            'route' => 'module',
            'url' => 'tags',
        ]);
        $module->save();

    }
}
