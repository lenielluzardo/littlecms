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
        for($i = 0; $i < 10; $i++)
        {

            $entry = new \App\Models\Entry([
                'title' => "PostEntry Title From Seeder #$i",
                'thumbnail' => 'https://via.placeholder.com/600/51ebff',
                'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
                'published_at' => \Carbon\Carbon::now(),
                'active' => true,
                'user_id' => 1,
                'category_id' => 1,
                'module_id' => 1
            ]);
            $entry->save();

            $entry = new \App\Models\Entry([
                'title' => "PostEntry Title From Seeder #$i",
                'thumbnail' => 'https://via.placeholder.com/600/55ebff',
                'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
                'published_at' => \Carbon\Carbon::now(),
                'active' => true,
                'user_id' => 1,
                'category_id' => 2,
                'module_id' => 1
            ]);
            $entry->save();

            $entry = new \App\Models\Entry([
                'title' => "PostEntry Title From Seeder #$i",
                'thumbnail' => 'https://via.placeholder.com/600/30ebff',
                'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
                'published_at' => \Carbon\Carbon::now(),
                'active' => true,
                'user_id' => 1,
                'category_id' => 3,
                'module_id' => 1
            ]);
            $entry->save();

            $entry = new \App\Models\Entry([
                'title' => "Project-Entry Title From Seeder #$i",
                'thumbnail' => 'https://via.placeholder.com/600/51ebff',
                'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
                'published_at' => \Carbon\Carbon::now(),
                'active' => true,
                'user_id' => 1,
                'category_id' => 4,
                'module_id' => 2
            ]);
            $entry->save();


            $entry = new \App\Models\Entry([
                'title' => "Project-Entry Title From Seeder #$i",
                'thumbnail' => 'https://via.placeholder.com/600/51ebff',
                'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
                'published_at' => \Carbon\Carbon::now(),
                'active' => true,
                'user_id' => 1,
                'category_id' => 5,
                'module_id' => 2
            ]);
            $entry->save();


            $entry = new \App\Models\Entry([
                'title' => "Project-Entry Title From Seeder #$i",
                'thumbnail' => 'https://via.placeholder.com/600/40ebff',
                'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
                'published_at' => \Carbon\Carbon::now(),
                'active' => true,
                'user_id' => 1,
                'category_id' => 6,
                'module_id' => 2
            ]);
            $entry->save();
        }

        $entry = new \App\Models\Entry([
            'title' => "Experience",
            'thumbnail' => 'assets/images/about-section-header.png',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'published_at' => \Carbon\Carbon::now(),
            'active' => true,
            'user_id' => 1,
            'category_id' => 7,
            'module_id' => 3,
            'icon' => 'fa fa-briefcase'
        ]);
        $entry->save();

        $entry = new \App\Models\Entry([
            'title' => "Stack",
            'thumbnail' => 'assets/images/about-section-header.png',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'published_at' => \Carbon\Carbon::now(),
            'active' => true,
            'user_id' => 1,
            'category_id' => 7,
            'module_id' => 3,
            'icon' => 'fa fa-cubes'
        ]);
        $entry->save();

        $entry = new \App\Models\Entry([
            'title' => "Studies",
            'thumbnail' => 'assets/images/about-section-header.png',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'published_at' => \Carbon\Carbon::now(),
            'active' => true,
            'user_id' => 1,
            'category_id' => 7,
            'module_id' => 3,
            'icon' => 'fa fa-graduation-cap'
        ]);
        $entry->save();

        $entry = new \App\Models\Entry([
            'title' => "Hobbies",
            'thumbnail' => 'assets/images/about-section-header.png',
            'content' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'published_at' => \Carbon\Carbon::now(),
            'active' => true,
            'user_id' => 1,
            'category_id' => 7,
            'module_id' => 3,
            'icon' => 'fa fa-gamepad'
        ]);
        $entry->save();




    }
}
