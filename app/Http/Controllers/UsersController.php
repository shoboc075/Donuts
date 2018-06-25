<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        if (\Auth::check()) {
            $user = \Auth::user();
        }
        return view('1_PreLogin.welcome');
        
    }
    
    public function show()
    {   $user = User::find($id);
        $hobbies = $user->hobbies()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'hobbies' => $hobbies,
        ];
        

        $data += $this->counts($user);

        return view('users.show', $data);
    }
}