<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function tags(){
        return $this->belongsToMany('App\Models\Tag', 'post_tag', 'post_id', 'tag_id')
        ->withTimestamps();
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
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
        $post->user->detach();
        $post->tags->detach();
        $post->delete();
    }

    public function savePost($request)
    {
        $post = new Post();
        $post->user_id = 1;

        $post->title = $request->input('title');
        $post->paragraph1 = $request->input('paragraph1');
        $post->paragraph2 = $request->input('paragraph2');
        $post->paragraph3 = $request->input('paragraph3');
        $post->paragraph4 = $request->input('paragraph4');
        $post->save();

        $post->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));
    }
}
