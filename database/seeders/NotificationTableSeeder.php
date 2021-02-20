<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notification = new \App\Models\Notification([
            'message' => 'This site is currently on beta version, please notice any bug through the contact section. Thanks in advance',
            'message_type' => 'warning'
        ]);
        $notification->save();
    }
}
