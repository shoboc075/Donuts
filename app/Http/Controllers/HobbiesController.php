<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hobby;

class HobbiesController extends Controller
{
    
    public function index($genre, $title)
    {
        
    }
    
    
    
    public function show($genre, $title)
    {
        
        
        return view('4_Genre.genre', $genre, $title, $hobbies);
    }

    
    public function edit($id)
    {
        $hobby = Hobby::find($id);

        return view('2_AfterLogin.edit', [
            'hobby' => $hobby,
        ]);
    }

    
    
}
