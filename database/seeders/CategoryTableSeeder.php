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
            'name' => 'blog',
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'software',
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'animation',
        ]);
        $category->save();

        $category = new \App\Models\Category([
            'name' => 'illustration',
        ]);
        $category->save();

    }
}
