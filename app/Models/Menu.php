<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'url','parent_id'];
    public $incrementing = false;

    public function users(){
        return $this->belongsToMany('App\Models\User')
        ->withTimestamps();
    }

    public function modules(){
        return $this->belongsToMany(Module::class)
        ->withTimestamps();
    }

    public function childs(){
        return $this->hasMany('App\Models\Menu', 'parent_id', 'id');
    }

    public function getSocialMediaMenu()
    {
        $footer = $this->where('name','web_socialmedia')->first()->childs()->where('active', true)->get();
        // dd($footer);
        return $footer;
    }

    public function getUserHeaderMenu()
    {
        $header = $this->where('name', 'web_main_navigation')->first()->modules()->where('active', true)->get();
        // dd($header);
        return $header;

    }
    public function GetAllModules()
    {
        $modules = $this->where('name', 'admin_main_navigation')->first()->modules()->get();
        // dd($header);
        return $modules;
    }

}
