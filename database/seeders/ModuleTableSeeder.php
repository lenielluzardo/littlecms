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
            'name' => 'blog'
        ]);
        $module->save();

        $module = new \App\Models\Module([
            'name' => 'portfolio'
        ]);
        $module->save();
    }
}
