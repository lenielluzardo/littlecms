<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function images(){
        return $this->hasMany('App\Models\Link');
    }

    public function tags(){
        return $this->hasMany('App\Models\Tag');
    }
    protected $fillable = ['title', 'content'];

    public function getAllPosts(){
        $posts = Post::all();
        return $posts;
    }

    public function getLatestPost(){
        $post = Post::latest()->first();
        return $post;
    }
    public function getRelatedPosts($id){
        $relateds = Post::all()->where('id', '!=', $id);
        return $relateds;
    }

    public function getPostById($id){
        $post = Post::find($id);
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
        $post->active = true;
        $post->rating = 0.0;

        return $post->save();
    }

    // private function getPostById($discipline, $projectId, $session){

    //     return Project::where( 'discipline', "$discipline")->where('id', $projectId)->get();

    // }
    private function removeProject($projectId){}

    // public function getPosts($session)
    // {
    //     if(!$session->has('posts')){
    //         $this->createDummyData($session);
    //     }
    //     return $session->get('posts');
    // }
}
