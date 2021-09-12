@extends('layouts.app')

@section('content')
@foreach($bookmarks as $bookmark)
<p>{{$bookmark->url}}</p>
@endforeach
@endsection
