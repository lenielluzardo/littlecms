<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'ad_img', 'company', 'url', 'active', 'updated_at', 'created_at'];

    public function getAdds()
    {
        return $this->where('active', true)->get();
    }
}
