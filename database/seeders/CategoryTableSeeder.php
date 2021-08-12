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
            'module_id' => 1,
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'animation',
            'icon' => 'fa fa-film',
            'module_id' => 1,
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'illustration',
            'icon' => 'fa fa-paint-brush',
            'module_id' => 1,
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'software',
            'icon' => 'fa fa-code',
            'module_id' => 2,
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'animation',
            'icon' => 'fa fa-film',
            'module_id' => 2,
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'illustration',
            'icon' => 'fa fa-paint-brush',
            'module_id' => 2,
        ]);
        $category->save();

    }
}
