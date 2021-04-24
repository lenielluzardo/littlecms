<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getIndex(Post $postModel)
    {
        $post = $postModel->getLatestPost();

        $relateds = $postModel->getRelatedPosts($post->id);

        return view('user.content.blog.blog', ['latest' => $post, 'relateds' => $relateds]);
    }

    public function getPostById($id, Post $postModel)
    {
        $post = $postModel->getPostById($id);

        $relateds = $postModel->getRelatedPosts($post->id);

        return view('user.content.blog.post', ['item' => $post, 'relateds' => $relateds]);
    }
}
