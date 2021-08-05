<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EntryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entry = new \App\Models\Entry([
            'title' => 'Post-Entry Title From Seeder #1',
            'thumbnail' => 'https://via.placeholder.com/600',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'user_id' => 1,
            'category_id' => 1,
            'module_id' => 1
        ]);
        $entry->save();

        $entry = new \App\Models\Entry([
            'title' => 'Project-Entry Title From Seeder #1',
            'thumbnail' => 'https://via.placeholder.com/600',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'user_id' => 1,
            'category_id' => 2,
            'module_id' => 2
        ]);
        $entry->save();


        $entry = new \App\Models\Entry([
            'title' => 'Project-Entry Title From Seeder #1',
            'thumbnail' => 'https://via.placeholder.com/600',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'user_id' => 1,
            'category_id' => 3,
            'module_id' => 2
        ]);
        $entry->save();


        $entry = new \App\Models\Entry([
            'title' => 'Project-Entry Title From Seeder #1',
            'thumbnail' => 'https://via.placeholder.com/600',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'user_id' => 1,
            'category_id' => 4,
            'module_id' => 2
        ]);
        $entry->save();
    }
}
