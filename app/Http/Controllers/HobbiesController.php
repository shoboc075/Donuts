<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hobby;

class HobbiesController extends Controller
{
    
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $hobbies = $user->feed_hobbies()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'hobbies' => $hobbies,
            ];
        }
        return view('1_PreLogin.welcome', $data);
    }
    
    public function create()
    {
         $hobby = new Hobby;

        return view('2_AfterLogin.create', [
            'hobby' => $hobby,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hobby = new Hobby;
        $hobby->content = $request->content;
        $hobby->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $hobby = Hobby::find($id);

        return view('2_AfterLogin.show', [
            'hobby' => $hobby,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobby = Hobby::find($id);

        return view('2_AfterLogin.edit', [
            'hobby' => $hobby,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hobby = Hobby::find($id);
        $hobby->content = $request->content;
        $hobby->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hobby = Hobby::find($id);
        $hobby->delete();

        return redirect('/');
    }
}
