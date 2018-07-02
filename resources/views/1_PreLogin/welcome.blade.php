@extends('0_Layouts.app')

@section('content')
<main>
<link rel="stylesheet" href="css/top.css">
     @if (Auth::check())
        <div class="row">
            <aside class="col-md-4">
            </aside>
            <div class="col-xs-8">
                @include('2_AfterLogin.index')
            </div>
        </div>
    
     @else
       
            <div class="text-center">
                <h1>Donuts</h1>
                <img src="img/sweets_french_cruller.png">
                
                
                <div>
                {!! link_to_route('login', 'Login?', null, ['class' => 'btn btn-lg btn-warning']) !!}
                {!! link_to_route('signup.get', 'sign up?', null, ['class' => 'btn btn-lg btn-primary']) !!}
                </div>
            </div>
        </div>
    @endif
</main>
@endsection


   