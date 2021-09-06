<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
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
            'first_name' => config('app.admin.first_name'),
            'last_name' => config('app.admin.last_name'),
            'description' => config('app.admin.description'),
            'thumbnail' => config('app.admin.thumbnail'),
            'username' => config('app.admin.username'),
            'email' => config('app.admin.email'),
            'secondary_email' => config('app.admin.secondary_email'),
            'recovery_email' => config('app.admin.recovery_email'),
            'password' => Hash::make(config('app.admin.password')),
        ]);
        $user->save();
    }
}
