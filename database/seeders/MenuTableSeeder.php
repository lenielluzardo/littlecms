<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new \App\Models\Menu([
            'section' => 'admin',
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'section' => 'user',
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'section' => 'social',
        ]);
        $menu->save();
    }
}
