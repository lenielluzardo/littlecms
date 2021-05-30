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
        $section = new \App\Models\Section([
            'name' => 'admin'
        ]);
        $section->save();

        $section = new \App\Models\Section([
            'name' => 'user'
        ]);
        $section->save();
    }
}
