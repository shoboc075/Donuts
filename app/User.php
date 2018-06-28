<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password',];
    protected $hidden = ['password', 'remember_token',];
    //前提
    
    public function havingHobbies()
    { return $this->belongsToMany(Hobby::class, 'user_hobby', 'user_id', 'hobby_id')->withTimestamps(); }
    
    
    
}
