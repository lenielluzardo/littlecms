<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [ 'title', 'url', 'route_name', 'parent_id', 'section_id', 'module_id'];
    protected $primaryKey = 'title';
    public $incrementing = false;

    public function childs(){
        return $this->hasMany('App\Models\Menu', 'parent_id', 'id');
    }

    public function getSocialMediaMenu()
    {
        return $this->find('social_media')->childs()->where('active', true)->get();
    }

    public function getUserHeaderMenu()
    {
        return $this->find('user_header')->childs()->where('active', true)->get();
    }
    public function getAdminHeaderMenu()
    {
        return $this->find('admin_header')->childs;
    }

}
