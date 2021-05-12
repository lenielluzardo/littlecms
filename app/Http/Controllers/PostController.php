<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Entry;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Index(Post $postModel)
    {
        $entryModel = new Entry();
        // $articles = $postModel->all();
        $articles = $entryModel->all();


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
