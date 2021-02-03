<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function login(){


        return view('admin.login');
    }

    public function getIndex(Post $postModel, Tag $tagModel){

        $posts = $postModel->getAllPosts();
        $tags = $tagModel->getAllTags();

        return view('admin.index', ['posts'=> $posts, 'tags' => $tags]);
    }

    // public function deletePost(Request $request, Post $postModel){
    //     $postModel->deletePost($request);
    //     return redirect()->route('admin.index');
    // }

    public function deletePost($id, Post $postModel){
        $postModel->deletePost($id);
        return redirect()->route('admin.index');
    }

    public function savePost(Post $postModel, Request $request){

        $postModel->savePost($request);


        $validation = Validator::make($request->all(), [
                    'title' => 'required',
                    'paragraph1' => 'required',
                    'paragraph2' => 'required',
                    'paragraph3' => 'required',
                    'paragraph4' => 'required'
                   ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }

        return redirect()->back();
    }
}
