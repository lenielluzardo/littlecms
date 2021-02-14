<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = new \App\Models\Project([
            'title' => 'Project Title From Seeder ANIMATION #1',
            'company' => 'Amazing Web Services C.A.',
            'description' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
            'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
            'image1' => 'https://via.placeholder.com/600',
            'image2' => 'https://via.placeholder.com/600',
            'url' => 'https://github.com/lenielluzardo/laravel-lluzardocom',
            'visible' => true,
            'section_id' => 3,
            'user_id' => 1
        ]);
        $project->save();

        $project = new \App\Models\Project([
            'title' => 'Project Title From Seeder ANIMATION #2',
            'company' => 'Amazing Web Services C.A.',
        'description' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'url' => 'https://github.com/lenielluzardo/laravel-lluzardocom',
        'visible' => true,
        'section_id' => 3,
        'user_id' => 1
        ]);
        $project->save();

        $project = new \App\Models\Project([
            'title' => 'Project Title From Seeder ILLUSTRATION #1',
            'company' => 'Amazing Web Services C.A.',
        'description' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'url' => 'https://github.com/lenielluzardo/laravel-lluzardocom',
        'visible' => true,
        'section_id' => 4,
        'user_id' => 1
        ]);
        $project->save();

        $project = new \App\Models\Project([
            'title' => 'Project Title From Seeder ILLUSTRATION #2',
            'company' => 'Amazing Web Services C.A.',
        'description' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'url' => 'https://github.com/lenielluzardo/laravel-lluzardocom',
        'visible' => true,
        'section_id' => 4,
        'user_id' => 1
        ]);
        $project->save();

        $project = new \App\Models\Project([
            'title' => 'Project Title From Seeder SOFTWARE #1',
            'company' => 'Amazing Web Services C.A.',
        'description' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'url' => 'https://github.com/lenielluzardo/laravel-lluzardocom',
        'visible' => true,
        'section_id' => 2,
        'user_id' => 1
        ]);
        $project->save();

        $project = new \App\Models\Project([
            'title' => 'Project Title From Seeder SOFTWARE #2',
            'company' => 'Amazing Web Services C.A.',
        'description' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'url' => 'https://github.com/lenielluzardo/laravel-lluzardocom',
        'visible' => true,
        'section_id' => 2,
        'user_id' => 1
        ]);
        $project->save();

        $project = new \App\Models\Project([
            'title' => 'Project Title From Seeder #4',
            'company' => 'Amazing Web Services C.A.',
        'description' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'url' => 'https://github.com/lenielluzardo/laravel-lluzardocom',
        'visible' => true,
        'section_id' => 2,
        'user_id' => 1
        ]);
        $project->save();

        $project = new \App\Models\Project([
            'title' => 'Project Title From Seeder #5',
            'company' => 'Amazing Web Services C.A.',
        'description' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'url' => 'https://github.com/lenielluzardo/laravel-lluzardocom',
        'visible' => true,
        'section_id' => 3,
        'user_id' => 1
        ]);
        $project->save();

        $project = new \App\Models\Project([
            'title' => 'Project Title From Seeder #6',
            'company' => 'Amazing Web Services C.A.',
        'description' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'url' => 'https://github.com/lenielluzardo/laravel-lluzardocom',
        'visible' => true,
        'section_id' => 4,
        'user_id' => 1
        ]);
        $project->save();
    }
}
