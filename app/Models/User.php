<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [ 'name', 'nickname','email', 'password', 'about1', 'about2','url1', 'url2','recovery_email'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = [ 'email_verified_at' => 'datetime'];

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
    public function projects(){
        return $this->hasMany('App\Models\Projects');
    }
}
