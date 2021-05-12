<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LabelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $label = new \App\Models\Label([
            'name' => 'c#',
        ]);
        $label->save();

        $label = new \App\Models\Label([
            'name' => 'php',
        ]);
        $label->save();

        $label = new \App\Models\Label([
            'name' => 'illustrator',
        ]);
        $label->save();

        $label = new \App\Models\Label([
            'name' => 'photoshop',
        ]);
        $label->save();
    }
}
