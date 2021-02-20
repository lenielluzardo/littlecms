<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(SectionTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
    }
}
