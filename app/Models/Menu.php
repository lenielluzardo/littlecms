<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'url', 'route_name', 'parent_id', 'section_id', 'module_id'];
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
        $footer = $this->where('name','public_footer')->first()->childs()->where('active', true)->get();
        // dd($footer);
        return $footer;
    }

    public function getUserHeaderMenu()
    {
        $header = $this->where('name', 'public_header')->first()->modules()->where('active', true)->get();
        return $header;
    }
    public function getAdminHeaderMenu()
    {
        $header = $this->where('name', 'admin_header')->first()->modules()->where('active', true)->get();
        // dd($header);
        return $header;
    }

}
