@extends('layouts.app')

@section('content')

<!-- コンテンツを書く -->
<h1>id: {{ $message->id }} の{{ $point->name }}メッセージ編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    {!! Form::hidden('point_id' , $message->id) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection