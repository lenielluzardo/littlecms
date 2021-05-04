<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Index(Post $postModel)
    {
        $articles = $postModel->all();


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
