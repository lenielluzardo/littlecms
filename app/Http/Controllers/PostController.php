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

        return view('blog.index', ['posts' => $posts]);
    }

    public function getPostById($id, Store $session){

        $postModel = new Post();
        $session->flush();
        $posts = $postModel->getPosts($session);

        if($posts[0]['id'] === 1){
            $post = $posts[0];
            return view('blog.post', ['post' => $post]);
        }else {
            return 'Incorrect ID';
        }

    }
}
