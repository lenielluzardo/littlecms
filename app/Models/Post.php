<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function getPosts()
    {
        $posts = Post::all();
        return $posts;
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

    private function updatePost($projectId)
    {

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
