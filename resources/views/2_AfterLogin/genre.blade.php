extends('0_Layouts.app')

@section('content')

    @if(count ($hobbies) >0)
        @include('3_Hobby.hobby', ['hobby' = $hobby])
    @endif


   
@endsection