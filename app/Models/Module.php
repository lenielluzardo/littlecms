<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function entries()
    {
        return $this->hasMany('App\Models\Entry', 'module_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany('App\Models\Category', 'module_id', 'id');
    }

    public function menus(){
        return $this->belongsToMany('App\Models\Menu');
    }

    public function GetAll()
    {
        return $this->all();
    }
}
