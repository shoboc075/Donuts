<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//DBのhobbiesテーブルから
class Hobby extends Model
{
    protected $fillable = ['content', 'user_id'];
    
    public function hobby()
    {
        return $this->belongsTo(User::class);
    }
}


?>