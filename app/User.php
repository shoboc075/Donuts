<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password',];

    protected $hidden = ['password', 'remember_token',];
    
    
    public function hobbies()
    { return $this->hasMany(Hobby::class); }
    
    public function feed_hobbies()
        {
            $hobby_id = $this->hobbies()-> pluck('user_id')->toArray();
            $hobby_id[] = $this->id;
            return Hobby::whereIn('user_id', $hobby_id);
        }
    
}
