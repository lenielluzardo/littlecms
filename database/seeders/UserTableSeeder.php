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
            'name' => config('app.admin.name'),
            'nickname' => config('app.admin.nickname'),
            'email' => config('app.admin.email'),
            'password' => Hash::make(config('app.admin.password')),
            'description' => config('app.admin.description'),
            'about' => config('app.admin.about'),
            'profile_img' => config('app.admin.profile_img'),
            'recovery_email' => config('app.admin.recovery_email'),
        ]);
        $user->save();
    }
}
