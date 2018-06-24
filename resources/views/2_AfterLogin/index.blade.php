@extends('0_Layouts.app')

@section('content')

    <h1>趣味一覧</h1>

    @if (count($hobbies) > 0)
         <table class="table table-striped">
         <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
         </thead>
                <tbody>
                    @foreach ($hobbies as $hobby)
                    <tr>
                        <td>{!! link_to_route('hobbies.show', $hobby->id, ['id' => $hobby->id]) !!}</td>
                        <td>{{ $hobby->title }}</td>
                        <td>{{ $hobby->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('hobbies.create', '新規趣味の投稿', null, ['class' => 'btn btn-primary']) !!}


@endsection