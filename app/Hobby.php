<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//DBのhobbiesテーブルから
class Hobby extends Model
{
    protected $fillable = ['content', 'genre_id'];
    
    public function beingHavedHobbies()
    { return $this->belongsToMany(User::class, 'user_hobby', 'user_id', 'hobby_id')->withTimestamps(); }
    
   
    
    
    
}
?>