<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function entries()
    {
        return $this->hasMany('App\Models\Entry', 'label_id', 'id');
    }
}
