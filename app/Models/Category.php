<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $primaryKey = 'name';

    public function entries(){
        return $this->hasMany('App\Models\Entry', 'category_id', 'id');
    }

    public function getBlogEntries()
    {
        return $this->find('posts')->entries;
    }

    public function getPortfolioEntries($category)
    {
        return $this->find($category)->entries;
    }

    public function getAllEntries()
    {
        return $this->all();
    }
}
