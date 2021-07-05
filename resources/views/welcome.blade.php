@extends('layouts.app')

@section('content')
    @if ( Auth::check() )
        {{ Auth::user()->name }}
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Let's surf in Akabane!!</h1>
            <h4>アカウント登録をして、皆で情報交換しましょう!</h4>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'アカウント登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection