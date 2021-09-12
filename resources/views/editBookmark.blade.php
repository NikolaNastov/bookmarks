@extends('layouts.app')

@section('content')
    <form method="post">
        @csrf
        <label>URL</label><br>
        <input type="text" name="url" value="{{$bookmark->url}}"><br>
        <label>comment</label><br>
        <input type="text" name="comment" value="{{$bookmark->comment}}"><br>
        <select name="tag">
            @foreach($tags as $tag)
                @if($tag->id == $bookmark->tag_id)
                    <option value="{{$tag->id}}" selected>{{$tag->name}}</option>
                @else
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endif
            @endforeach
        </select>
        <input type="checkbox" name="newtag" value="newtag">
        <label>Make new tag</label><br>
        <label>New tag name</label><br>
        <input type="text" name="tagname"><br>
        <label>New tag info</label><br>
        <input type="text" name="taginfo"><br>
        @if($bookmark->public == 0)
            <input type="checkbox" name="public" value="public">
            <label>make public</label><br>
        @else
            <input type="checkbox" name="public" value="public" checked>
            <label>make public</label><br>
        @endif
        <input type="submit" value="Edit bookmark">
    </form>
@endsection
