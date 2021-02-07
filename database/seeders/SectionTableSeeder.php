<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $section = new \App\Models\Section([
            'name' => 'Blog',
            'category' => 'web',
            'url' => '',
        ]);
        $section->save();
        $section = new \App\Models\Section([
            'name' => 'Software Devlopment',
            'category' => 'web',
            'url' => '',
        ]);
        $section->save();
        $section = new \App\Models\Section([
            'name' => 'Animation',
            'category' => 'web',
            'url' => '',
        ]);
        $section->save();
        $section = new \App\Models\Section([
            'name' => 'Illustration',
            'category' => 'web',
            'url' => '',
        ]);
        $section->save();
        $section = new \App\Models\Section([
            'name' => 'About',
            'category' => 'web',
            'url' => '',
        ]);
        $section->save();
        $section = new \App\Models\Section([
            'name' => 'Contact',
            'category' => 'web',
            'url' => '',
        ]);
        $section->save();

        $section = new \App\Models\Section([
            'name' => 'GitHub',
            'category' => 'social',
            'url' => env('SOCIAL_GH')
        ]);
        $section->save();
        $section = new \App\Models\Section([
            'name' => 'LinkedIn',
            'category' => 'social',
            'url' => env('SOCIAL_LI')
        ]);
        $section->save();
        $section = new \App\Models\Section([
            'name' => 'Behance',
            'category' => 'social',
            'url' => env('SOCIAL_BH')
        ]);
        $section->save();
        $section = new \App\Models\Section([
            'name' => 'Youtube',
            'category' => 'social',
            'url' => env('SOCIAL_YT')
        ]);
        $section->save();
        $section = new \App\Models\Section([
            'name' => 'Twitter',
            'category' => 'social',
            'url' => env('SOCIAL_TW')
        ]);
        $section->save();
        $section = new \App\Models\Section([
            'name' => 'Instagram',
            'category' => 'social',
            'url' => env('SOCIAL_IG')
        ]);
        $section->save();
        $section = new \App\Models\Section([
            'name' => 'Facebook',
            'category' => 'social',
            'url' => env('SOCIAL_FB')
        ]);
        $section->save();
    }
}
