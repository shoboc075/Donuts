@extends('0_Layouts.app')

@section('content')
     @if (Auth::check())
        <div class="row">
            <aside class="col-md-4">
            </aside>
            <div class="col-xs-8">
                @include('2_AfterLogin.index')
            </div>
        </div>
    
     @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Donuts</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection


   