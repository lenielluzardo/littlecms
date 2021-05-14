<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'route_name', 'url', 'menu_id'];

    public function menu(){
        return $this->belongsTo('App\Models\Menu');
    }
}
