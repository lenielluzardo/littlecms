<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linkImg = new \App\Models\Link([
            'url' => 'https://via.placeholder.com/500x400'
        ]);
        $linkImg->save();
    }
}
