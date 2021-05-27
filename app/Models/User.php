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
    protected $fillable = [ 'name', 'nickname','email', 'password', 'description', 'about','profile_img','recovery_email'];
    protected $primaryKey = 'email';
    protected $hidden = ['password', 'remember_token'];
    protected $casts = [ 'email_verified_at' => 'datetime'];

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
    public function projects(){
        return $this->hasMany('App\Models\Projects');
    }
}
