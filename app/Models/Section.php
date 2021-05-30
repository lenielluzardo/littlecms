<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $table = 'sections';
    protected $fillable = ['name', 'url'];

    public function projects()
    {
        return $this->hasMany('App\Models\Project', 'section_id', 'id');
    }

    public function entries()
    {
        return $this->hasMany('App\Models\Entry', 'section_id', 'id');
    }
}
