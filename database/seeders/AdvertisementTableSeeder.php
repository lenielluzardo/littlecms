<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdvertisementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ad = new \App\Models\Advertisement([
            'title' => 'Buy In',
            'description' => 'Buy In',
            'ad_img' => 'https://via.placeholder/400',
            'company' => 'Somecompany LLC',
            'url' => 'Buy In',
            'active' => true,
        ]);
        $ad->save();
    }
}
