@extends('0_Layouts.app')

@section('content')

    <h1>id: {{ $hobby->id }} のメッセージ編集ページ</h1>

    {!! Form::model($hobby, ['route' => ['hobbies.update', $hobby->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection