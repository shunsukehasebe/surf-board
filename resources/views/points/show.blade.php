@extends('layouts.app')

@section('content')

<h1>{{ $point->name }}メッセージ一覧</h1>

    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->title }}</td>
                    <td>{{ $message->content }}<br>
                    
                     @if (Auth::id() == $message->user_id)
                            {{-- メッセージ編集ボタンのフォーム --}}
                            {!! link_to_route('messages.edit', 'このメッセージを編集', ['message' => $message->id], ['class' => 'btn btn-primary']) !!}
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['messages.destroy',$message->id],'method' => 'delete']) !!}
                                {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- メッセージ作成ページへのリンク --}}
    {!! link_to_route('messages.get', '新規メッセージの投稿', ['point'=>$point->id], ['class' => 'btn btn-primary']) !!}
@endsection