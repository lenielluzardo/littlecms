<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Models\Category([
            'name' => 'software',
            'icon' => 'fa fa-code',
            'thumbnail' => 'assets/images/category-software.png',
            'module_id' => 1,
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'animation',
            'icon' => 'fa fa-film',
            'thumbnail' => 'assets/images/category-animation.png',
            'module_id' => 1,
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'illustration',
            'icon' => 'fa fa-paint-brush',
            'thumbnail' => 'assets/images/category-illustration.png',
            'module_id' => 1,
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'software',
            'icon' => 'fa fa-code',
            'thumbnail' => 'assets/images/category-software.png',
            'module_id' => 2,
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'animation',
            'icon' => 'fa fa-film',
            'thumbnail' => 'assets/images/category-animation.png',
            'module_id' => 2,
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'illustration',
            'icon' => 'fa fa-paint-brush',
            'thumbnail' => 'assets/images/category-illustration.png',
            'module_id' => 2,
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'about',
            'icon' => 'fa fa-user-astronaut',
            'module_id' => 4,
        ]);
        $category->save();

    }
}
