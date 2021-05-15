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
        $this->call(UserTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
        $this->call(EntryTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(LabelTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(MenuItemTableSeeder::class);
    }
}
