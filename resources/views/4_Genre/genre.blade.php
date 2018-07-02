extends('0_Layouts.app')

@section('content')

<h1>{{ $title }}</h1>

@foreach ($hobbies as $hobby)

print $hobby

@endforeach
   
@endsection