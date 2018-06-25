<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index () {
        
        $data = [];
            $hobbies = $user->feed_hobbies()->orderBy
        
        $data = [ 'hobbies' => $hobbies, ];
    }
        
        return view('2_AfterLogin.genre, $hobbies);
    }
}

