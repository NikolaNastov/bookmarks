@extends('layouts.app')

@section('content')
    <p>url: {{$bookmark->url}}</p>
    <p>comment: {{$bookmark->comment}}</p>
    <p>tag: php</p>
    <form action="/bookmark/delete/{{$bookmark->id}}" method="POST">
        @csrf
        <input type="submit" value="delete bookmark">
    </form>
@endsection
