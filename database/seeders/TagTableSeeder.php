<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new \App\Models\Tag([
            'name' => 'Software Development',
            'color' => 'gray',
        ]);
        $tag->save();

        $tag = new \App\Models\Tag([
            'name' => 'Illustration',
            'color' => 'yellow',
        ]);
        $tag->save();

        $tag = new \App\Models\Tag([
            'name' => 'Animation',
            'color' => 'green'
        ]);
        $tag->save();

        $tag = new \App\Models\Tag([
            'name' => 'Laravel',
            'color' => 'orange'
        ]);
        $tag->save();

        $tag = new \App\Models\Tag([
            'name' => '.NET',
            'color' => 'purple'
        ]);
        $tag->save();


    }
}
