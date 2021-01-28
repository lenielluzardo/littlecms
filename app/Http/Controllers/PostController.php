<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class PostController extends Controller
{
    public function getIndex(Store $session){

        $postModel = new Post();
        $session->flush();
        $posts = $postModel->getPosts($session);
        $post = array_shift($posts);
        $relatedPosts = array_slice($posts, 1, 10);
        unset($posts);

        return view('blog.index', ['post' => $post, 'relatedPosts' => $relatedPosts]);
    }

    public function getPostById($id, Store $session){

        $postModel = new Post();
        $session->flush();
        $posts = $postModel->getPosts($session);
        $post = array_shift($posts);
        $relatedPosts = array_slice($posts, 1, 10);
        unset($posts);

        return view('blog.post', ['post' => $post, 'relatedPosts' => $relatedPosts]);
    }
}
