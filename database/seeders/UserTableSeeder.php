<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User([
            'fullname' => 'John Dose',
            'nickname' => 'John_2e',
            'about' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'email' => 'john@dose.com',
            'password' => '123456',
            'recovery_email' => 'john@tres.com',
        ]);
        $user->save();
    }
}
