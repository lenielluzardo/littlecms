<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts(){
        return $this->belongsToMany('\App\Models\Post', 'post_tag', 'tag_id', 'post_id')
        ->withTimestamps();
    }

    public function projects(){
        return $this->hasMany('\App\Models\Project');
    }

    public function getAllTags(){
        $tags = Tag::all();
        return $tags;
    }
}
