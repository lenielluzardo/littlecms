<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    protected $fillable = ['title', 'content'];

    public function section(){
        return $this->belongsTo('App\Models\Section', 'section_id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function getAllProjects(){
        $posts = Project::all();
        return $posts;
    }

    public function getLatestProject($section)
    {
        $_section = Section::where('name', ucfirst($section))->first();

        $project = Project::where('section_id', $_section->id)->orderBy('created_at', 'desc')
                ->with('user')->with('section')->first();

        return $project;
    }

    public function getRelatedProjects($section, $id)
    {
        $_section = Section::where('name', ucfirst($section))->first();
        $relateds = Project::where('section_id', $_section->id)->where('id', '!=', $id)->get();

        return $relateds;
    }

    public function getProjectById($id)
    {
        $project = Project::find($id);
        return $project;
    }

    public function updateProject($request)
    {
        $post = Post::find($request->input('id'));
        $post->title =  $request->input('title');
        $post->paragraph1 =  $request->input('paragraph1');
        $post->paragraph2 =  $request->input('paragraph2');
        $post->paragraph3 =  $request->input('paragraph3');
        $post->paragraph4 =  $request->input('paragraph4');
        $post->save();
    }

    public function deleteProject($id)
    {
        $post = Post::find($id);
        $post->delete();
    }

    public function saveProject($request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->paragraph1 = $request->input('paragraph1');
        $post->paragraph2 = $request->input('paragraph2');
        $post->paragraph3 = $request->input('paragraph3');
        $post->paragraph4 = $request->input('paragraph4');
        $post->save();

    }
}
