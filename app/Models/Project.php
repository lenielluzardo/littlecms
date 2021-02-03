<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'content'];

    public function tag(){
        return $this->belongsTo('App\Models\Tag');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function getAllProjects(){
        $posts = Project::all();
        return $posts;
    }

    public function getLatestProject($section){
        //TODO: Query that uses section name to bring project that matches the tag name

        $sectionId = $this->getSectionId($section);

        $project = Project::where('tag_id', '=', $sectionId )
        ->with('tag')->orderBy('created_at','desc')->first();


        return $project;
    }
    public function getRelatedProjects($section, $id){

        $sectionId = $this->getSectionId($section);
        $relateds = Project::all()->where('tag_id', $sectionId)->where('id', '<>', $id);
        return $relateds;
    }

    public function getProjectById($id){
        $project = Project::find($id);
        return $project;
    }

    public function updateProject($request){

        $post = Post::find($request->input('id'));
        $post->title =  $request->input('title');
        $post->paragraph1 =  $request->input('paragraph1');
        $post->paragraph2 =  $request->input('paragraph2');
        $post->paragraph3 =  $request->input('paragraph3');
        $post->paragraph4 =  $request->input('paragraph4');
        $post->save();
    }

    public function deleteProject($id){
        $post = Post::find($id);
        $post->delete();
    }

    public function saveProject($request)
    {
        $post = new Post();
        // $post->user_id = 1;

        $post->title = $request->input('title');
        $post->paragraph1 = $request->input('paragraph1');
        $post->paragraph2 = $request->input('paragraph2');
        $post->paragraph3 = $request->input('paragraph3');
        $post->paragraph4 = $request->input('paragraph4');
        $post->save();

    }
    private function getSectionId($section){
        switch($section)
        {
            case 'Animation':
                return 1;
            break;
            case 'Illustration':
                return 2;
            break;
            case 'Software':
                return 3;
            break;
                default:
                return null;
        }
    }

}
