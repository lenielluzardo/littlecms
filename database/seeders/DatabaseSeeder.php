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
        $this->call(RoleTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(EntryTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(AdvertisementTableSeeder::class);
        $this->call(UserFieldTableSeeder::class);
    }
}
