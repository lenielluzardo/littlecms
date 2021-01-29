<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use \Illuminate\Validation\Factory;

class AdminController extends Controller
{
    public function getIndex(Post $postModel){

        $posts = $postModel->getPosts();

        return view('admin.index', ['posts'=> $posts]);
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
