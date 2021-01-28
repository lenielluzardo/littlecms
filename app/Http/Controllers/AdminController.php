<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use \Illuminate\Validation\Factory;

class AdminController extends Controller
{
    public function getIndex( Store $session){
        $postModel = new Post();
        $posts = $postModel->getPosts($session);

        return view('admin.index', ['posts'=> $posts]);
    }

    public function savePost(Request $request, Factory $validator, Store $session){

        $validation = $validator->make($request->all(),[
                    'title' => 'required',
                    'paragraph1' => 'required| min:100',
                    'paragraph2' => 'required| min:100',
                    'paragraph3' => 'required| min:100',
                    'paragraph4' => 'required| min:100'
                   ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }

        return view('admin.save');
    }
}
