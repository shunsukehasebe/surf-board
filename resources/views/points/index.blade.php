@extends('layouts.app')

@section('content')

<h1>ポイント一覧</h1>

    @if (count($points) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ポイント名</th>
                    <th>説明</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($points as $point)
                <tr>
                    <td>{{ $point->id }}</td>
                    <td>{!! link_to_route('points.show', $point->name, ['point' => $point->id]) !!}</td>
                    <td>{{ $point->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection