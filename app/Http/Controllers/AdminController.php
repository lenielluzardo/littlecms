<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function getIndex(Post $postModel, Tag $tagModel){
        if(!Auth::check()){
            return redirect()->back();
        }

        $posts = $postModel->getAllPosts();
        $tags = $tagModel->getAllTags();

        return view('admin.index', ['posts'=> $posts, 'tags' => $tags]);
    }

    public function deletePost($id, Post $postModel){
        if(!Auth::check()){
            return redirect()->back();
        }
        $postModel->deletePost($id);
        return redirect('/admin');
    }

    public function savePost(Post $postModel, Request $request){
        if(!Auth::check()){
            return redirect()->back();
        }
        // $validation = Validator::make($request->all(), [
        //             'title' => 'required',
        //             'paragraph1' => 'required',
        //             'paragraph2' => 'required',
        //             'paragraph3' => 'required',
        //             'paragraph4' => 'required'
        //            ]);

        // if($validation->fails()){
        //     return redirect()->back()->withErrors($validation);
        // }

        $user = Auth::user();
        // if(!$user){
        //     return redirect()->back();
        // }

        $postModel->savePost($request, $user);

        return redirect()->back();
    }
}
