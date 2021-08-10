<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserFieldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userField = new \App\Models\UserField([ 
            'user_id' => 1
        ]);
        $userField->save();

        //
    }
}
