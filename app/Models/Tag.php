<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function entries()
    {
        return $this->belongsToMany('\App\Models\ENtries');
    }

    public function getAllTags()
    {
        $tags = Tag::all();
        return $tags;
    }
}
