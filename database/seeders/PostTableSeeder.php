<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Models\Post([
            'title' => 'Post Title From Seeder #1',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'paragraph3' => 'Irure eiusmod voluptate amet Lorem cupidatat do aliqua do do proident. Commodo voluptate sint tempor ut consequat. Anim sit deserunt irure sunt. Lorem cupidatat amet reprehenderit duis culpa laborum reprehenderit Lorem sunt. Duis sunt culpa adipisicing incididunt est veniam do eiusmod proident do. Sunt excepteur labore consequat proident exercitation eiusmod enim.',
        'paragraph4' => 'Nisi officia eu irure exercitation aute laborum do ea. Esse incididunt ex ex minim exercitation magna non elit nisi. Consequat excepteur cillum duis sint exercitation duis enim enim sit sunt esse officia enim. Ad eiusmod minim ad quis labore. Veniam nostrud proident ad cupidatat Lorem do dolore veniam deserunt tempor nisi.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'user_id' => 1
        ]);
        $post->save();
        $post->tags()->attach([1,2,3]);


        $post = new \App\Models\Post([
            'title' => 'Post Title From Seeder #2',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'paragraph3' => 'Irure eiusmod voluptate amet Lorem cupidatat do aliqua do do proident. Commodo voluptate sint tempor ut consequat. Anim sit deserunt irure sunt. Lorem cupidatat amet reprehenderit duis culpa laborum reprehenderit Lorem sunt. Duis sunt culpa adipisicing incididunt est veniam do eiusmod proident do. Sunt excepteur labore consequat proident exercitation eiusmod enim.',
        'paragraph4' => 'Nisi officia eu irure exercitation aute laborum do ea. Esse incididunt ex ex minim exercitation magna non elit nisi. Consequat excepteur cillum duis sint exercitation duis enim enim sit sunt esse officia enim. Ad eiusmod minim ad quis labore. Veniam nostrud proident ad cupidatat Lorem do dolore veniam deserunt tempor nisi.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'user_id' => 1
        ]);
        $post->save();
        $post->tags()->attach([1,2,3]);

        $post = new \App\Models\Post([
            'title' => 'Post Title From Seeder #3',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'paragraph3' => 'Irure eiusmod voluptate amet Lorem cupidatat do aliqua do do proident. Commodo voluptate sint tempor ut consequat. Anim sit deserunt irure sunt. Lorem cupidatat amet reprehenderit duis culpa laborum reprehenderit Lorem sunt. Duis sunt culpa adipisicing incididunt est veniam do eiusmod proident do. Sunt excepteur labore consequat proident exercitation eiusmod enim.',
        'paragraph4' => 'Nisi officia eu irure exercitation aute laborum do ea. Esse incididunt ex ex minim exercitation magna non elit nisi. Consequat excepteur cillum duis sint exercitation duis enim enim sit sunt esse officia enim. Ad eiusmod minim ad quis labore. Veniam nostrud proident ad cupidatat Lorem do dolore veniam deserunt tempor nisi.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'user_id' => 1
        ]);
        $post->save();
        $post->tags()->attach([1,2,3]);

        $post = new \App\Models\Post([
            'title' => 'Post Title From Seeder #4',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'paragraph3' => 'Irure eiusmod voluptate amet Lorem cupidatat do aliqua do do proident. Commodo voluptate sint tempor ut consequat. Anim sit deserunt irure sunt. Lorem cupidatat amet reprehenderit duis culpa laborum reprehenderit Lorem sunt. Duis sunt culpa adipisicing incididunt est veniam do eiusmod proident do. Sunt excepteur labore consequat proident exercitation eiusmod enim.',
        'paragraph4' => 'Nisi officia eu irure exercitation aute laborum do ea. Esse incididunt ex ex minim exercitation magna non elit nisi. Consequat excepteur cillum duis sint exercitation duis enim enim sit sunt esse officia enim. Ad eiusmod minim ad quis labore. Veniam nostrud proident ad cupidatat Lorem do dolore veniam deserunt tempor nisi.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'user_id' => 1
        ]);
        $post->save();
        $post->tags()->attach([1,2,3]);

        $post = new \App\Models\Post([
            'title' => 'Post Title From Seeder #5',
        'paragraph1' => 'Incididunt voluptate amet laborum esse est Lorem elit et laborum commodo laborum. Mollit cupidatat et ad pariatur occaecat sit. Duis aute nisi tempor sint qui est qui et. Aliquip nulla ex nulla reprehenderit esse cillum anim amet. Consequat tempor ea non do officia eu.',
        'paragraph2' => 'Consectetur fugiat sunt irure quis fugiat mollit. Laboris anim duis pariatur culpa et non amet irure esse dolore nostrud irure excepteur consequat. Commodo ipsum in aute adipisicing pariatur tempor laboris eiusmod ad cupidatat ut tempor. Excepteur ullamco magna ipsum labore velit. Nulla ipsum laboris eiusmod amet excepteur Lorem reprehenderit voluptate non nulla. Amet proident adipisicing velit ea nostrud dolor. In anim culpa incididunt nostrud ea quis nulla nostrud culpa exercitation aliqua duis tempor.',
        'paragraph3' => 'Irure eiusmod voluptate amet Lorem cupidatat do aliqua do do proident. Commodo voluptate sint tempor ut consequat. Anim sit deserunt irure sunt. Lorem cupidatat amet reprehenderit duis culpa laborum reprehenderit Lorem sunt. Duis sunt culpa adipisicing incididunt est veniam do eiusmod proident do. Sunt excepteur labore consequat proident exercitation eiusmod enim.',
        'paragraph4' => 'Nisi officia eu irure exercitation aute laborum do ea. Esse incididunt ex ex minim exercitation magna non elit nisi. Consequat excepteur cillum duis sint exercitation duis enim enim sit sunt esse officia enim. Ad eiusmod minim ad quis labore. Veniam nostrud proident ad cupidatat Lorem do dolore veniam deserunt tempor nisi.',
        'image1' => 'https://via.placeholder.com/600',
        'image2' => 'https://via.placeholder.com/600',
        'user_id' => 1
        ]);
        $post->save();
        $post->tags()->attach([1,2,3]);
    }
}
