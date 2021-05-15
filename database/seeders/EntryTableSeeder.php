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
            'preview_img' => 'https://via.placeholder.com/600',
            'preview_content' => 'Nisi officia eu irure exercitation aute laborum do ea. Esse incididunt ex ex minim exercitation magna',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'label_id' => 1,
            'category_id' => 1,
            'module_name' => 'blog'
        ]);
        $entry->save();

        $entry = new \App\Models\Entry([
            'title' => 'Project-Entry Title From Seeder #1',
            'preview_img' => 'https://via.placeholder.com/600',
            'preview_content' => 'Nisi officia eu irure exercitation aute laborum do ea. Esse incididunt ex ex minim exercitation magna',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'user_id' => 1,
            'label_id' => 2,
            'category_id' => 2,
            'module_name' => 'portfolio'
        ]);
        $entry->save();


        $entry = new \App\Models\Entry([
            'title' => 'Project-Entry Title From Seeder #1',
            'preview_img' => 'https://via.placeholder.com/600',
            'preview_content' => 'Nisi officia eu irure exercitation aute laborum do ea. Esse incididunt ex ex minim exercitation magna',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'user_id' => 1,
            'label_id' => 2,
            'category_id' => 3,
            'module_name' => 'portfolio'
        ]);
        $entry->save();


        $entry = new \App\Models\Entry([
            'title' => 'Project-Entry Title From Seeder #1',
            'preview_img' => 'https://via.placeholder.com/600',
            'preview_content' => 'Nisi officia eu irure exercitation aute laborum do ea. Esse incididunt ex ex minim exercitation magna',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'user_id' => 1,
            'label_id' => 2,
            'category_id' => 4,
            'module_name' => 'portfolio'
        ]);
        $entry->save();
    }
}
