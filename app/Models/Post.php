<?php

namespace App\Models;

use Auth;
use Gate;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function tags(){
        return $this->belongsToMany('App\Models\Tag', 'post_tag', 'post_id', 'tag_id')
        ->withTimestamps();
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function getAllPosts(){
        $posts = Post::all();
        return $posts;
    }

    public function getLatestPost(){
        $post = Post::latest()->with('user')->with('tags')->first();
        return $post;
    }
    public function getRelatedPosts($id){
        $relateds = Post::all()->where('id', '!=', $id);
        return $relateds;
    }

    public function getPostById($id){
        $post = Post::with('user')->with('tags')->find($id);
        return $post;
    }

    public function updatePost($request){

        $post = Post::find($request->input('id'));
        $post->title =  $request->input('title');
        $post->paragraph1 =  $request->input('paragraph1');
        $post->paragraph2 =  $request->input('paragraph2');
        $post->paragraph3 =  $request->input('paragraph3');
        $post->paragraph4 =  $request->input('paragraph4');
        $post->save();
    }

    public function deletePost($id){
        $post = Post::find($id);
        // $post->tags()->detach($post->tags);
        $post->delete();
    }
    // public function deletePost($request){
    //     $post = Post::find($request->input('id'));
    //     // $post->tags()->detach($post->tags);
    //     $post->delete();
    // }

    public function savePost($request, $user)
    {
        //TODO: Divide Create and Update Ops to each Method

        $post = new Post();
        $post->title = $request->input('title');
        $post->paragraph1 = $request->input('paragraph1');
        $post->paragraph2 = $request->input('paragraph2');
        $post->paragraph3 = $request->input('paragraph3');
        $post->paragraph4 = $request->input('paragraph4');
        // $user->posts()->save($post);
        if(Auth::denies('save-post', $post)){
            return redirect()->back();
        }
        $post->user->attach($user);
        $post->save();

        $post->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));
    }
}
