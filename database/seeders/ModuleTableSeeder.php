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
            'name' => 'blog',
            'section_id' => 2
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'portfolio',
            'section_id' => 2
        ]);
        $module->save();
    }
}
