@extends('layouts.app')

@section('content')
    <form method="post">
        @csrf
        <label>URL</label><br>
        <input type="text" name="url"><br>
        <label>comment</label><br>
        <input type="text" name="comment"><br>
        <select name="tag">
            @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
        <input type="checkbox" name="newtag" value="newtag">
        <label>Make new tag</label><br>
        <label>New tag name</label><br>
        <input type="text" name="tagname"><br>
        <label>New tag info</label><br>
        <input type="text" name="taginfo"><br>
        <input type="checkbox" name="public" value="public">
        <label>make public</label><br>
        <input type="submit" value="Make bookmark">
    </form>
@endsection
