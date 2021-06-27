<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $fillable = [ 'name', 'nickname','primary_email', 'secondary_email', 'password', 'description', 'about','profile_img','recovery_email'];
    // protected $primaryKey = 'email';
    public $incrementing = false;
    protected $hidden = ['password', 'remember_token'];
    protected $casts = [ 'email_verified_at' => 'datetime'];


    public function entries(){
        return $this->hasMany('App\Models\Entry');
    }

    public function menus(){
        return $this->belongsToMany('App\Models\Menu');
    }

    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }
}
