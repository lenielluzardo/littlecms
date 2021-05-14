<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['section'];

    public function items(){
        return $this->hasMany('App\Models\MenuItem', 'menu_id', 'id');
    }
}
