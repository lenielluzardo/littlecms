<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

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

    public function savePost(Post $postModel, Request $request){

        $postModel->savePost($request);


        // $validation = $validator->make($request->all(),[
        //             'title' => 'required',
        //             'paragraph1' => 'required| min:100',
        //             'paragraph2' => 'required| min:100',
        //             'paragraph3' => 'required| min:100',
        //             'paragraph4' => 'required| min:100'
        //            ]);

        // if($validation->fails()){
        //     return redirect()->back()->withErrors($validation);
        // }

        return redirect()->back();
    }
}
