@extends('0_Layouts.app')

@section('content')

    <h1>id = {{ $hobby->id }} の趣味詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $hobby->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $hobby->title }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $hobby->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('hobbies.edit', 'このメッセージを編集', ['id' => $hobby->id], ['class' => 'btn btn-default']) !!}


    {!! Form::model($hobby, ['route' => ['hobbies.destroy', $hobby->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection