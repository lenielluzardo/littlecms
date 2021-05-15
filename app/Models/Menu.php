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

    public function getUserSocialMenu()
    {
        return $this->find('footer_social')->childs;
    }

    public function getUserHeaderMenu()
    {
        return $this->find('header_modules')->childs;
    }
    public function getAdminHeaderMenu()
    {

    }

}
