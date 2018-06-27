@extends('0_Layouts.app')

@section('content')

    <h1>個人情報編集ページ</h1>

    <div class="row">
        <div class="col-xs-6">
            {!! Form::model($hobby, ['route' => ['hobbies.update', $hobby->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('登録', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection