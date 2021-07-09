@extends('layouts.app')

@section('content')

<!-- コンテンツを書く -->
<h1>{{ $point->name }}メッセージ新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($point, ['route' => 'messages.store']) !!}
                
                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    {!! Form::hidden('point_id' , $point->id) !!}
                </div>

                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection