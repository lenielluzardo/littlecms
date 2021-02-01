<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class PostController extends Controller
{
    public function getIndex(Store $session, Post $postModel){

        $post = $postModel->getLatestPost();
        $relateds = $postModel->getRelatedPosts($post->id);

        return view('blog.index', ['post' => $post, 'relateds' => $relateds]);
    }

    public function getPostById($id, Post $postModel, Store $session){

        $post = $postModel->getPostById($id);
        $relateds = $postModel->getRelatedPosts($post->id);

        return view('blog.post', ['post' => $post, 'relateds' => $relateds]);
    }
}
