<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Index()
    {
        $entryModel = new Entry();

        //TODO: Create View Model : Migrate this logic to a new layer
        $articles = $entryModel->all()->where('section_id', 1);


        return view('user.content.blog.blog', ['items' => $articles, 'section'=> 'Archive', 'routeName' => 'post', 'urlSection' => 'posts', 'path' => 'Archive']);
    }

    // public function Post($section, $id, Post $postModel)
    // {
    //     // dd($id);
    //     $post = $postModel->getPostById($id);

    //     // $relateds = $postModel->getRelatedPosts($post->id);

    //     return view('user.partial.article', ['item' => $post]);
    // }
}
