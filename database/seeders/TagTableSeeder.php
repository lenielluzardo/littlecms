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
            'name' => 'c#',
        ]);
        $tag->save();

        $tag = new \App\Models\Tag([
            'name' => 'php',
        ]);
        $tag->save();

        $tag = new \App\Models\Tag([
            'name' => 'illustrator',
        ]);
        $tag->save();

        $tag = new \App\Models\Tag([
            'name' => 'photoshop',
        ]);
        $tag->save();
    }
}
