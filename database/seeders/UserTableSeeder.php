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
            'username' => config('app.admin.username'),
            'email' => config('app.admin.primary_email'),
            'secondary_email' => config('app.admin.secondary_email'),
            'recovery_email' => config('app.admin.recovery_email'),
            'password' => Hash::make(config('app.admin.password')),
        ]);
        $user->save();
    }
}
