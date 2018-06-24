@extends('0_Layouts.app')

@section('content')

    <h1>id = {{ $hobby->id }} の趣味詳細ページ</h1>

    <p>{{ $hobby->content }}</p>
    
    {!! link_to_route('hobbies.edit', 'このメッセージを編集', ['id' => $hobby->id]) !!}


    {!! Form::model($hobby, ['route' => ['hobbies.destroy', $hobby->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
@endsection