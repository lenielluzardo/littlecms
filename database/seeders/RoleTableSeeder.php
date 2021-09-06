<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Models\Role([
            'name' => 'admin',
        ]);
        $role->save();

        $role = new \App\Models\Role([
            'name' => 'subscriptor',
        ]);
        $role->save();

        $role = new \App\Models\Role([
            'name' => 'client',
        ]);
        $role->save();
        $role = new \App\Models\Role([
            'name' => 'collaborator',
        ]);
        $role->save();
        $role = new \App\Models\Role([
            'name' => 'anonymous',
        ]);
        $role->save();
    }
}
