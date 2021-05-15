<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'preview_img', 'preview_content', 'content', 'user_id', 'label_id', 'category_id', 'module_name'];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function label(){
        return $this->belongsTo('App\Models\Label');
    }

    public function section(){
        return $this->belongsTo('App\Models\Section');
    }
}
