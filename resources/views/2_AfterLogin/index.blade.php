@extends('0_Layouts.app')

@section('content')

    <h1>趣味一覧</h1>

    @if (count($hobbies) > 0)
        <ul>
            @foreach ($hobbies as $hobby)
                <li>{!! link_to_route('hobbies.show', $hobby->id, ['id' => $hobby->id]) !!} : {{ $hobby->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('hobbies.create', '新規趣味の投稿') !!}


@endsection