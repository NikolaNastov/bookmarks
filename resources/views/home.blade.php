@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <table>
                        <tr>
                            <th>url</th>
                            <th>comment</th>
                            <th>tag</th>
                            <th>created at</th>
                            <th>public</th>
                        </tr>
                        @foreach($bookmarks as $bookmark)
                            <tr>
                                <td>{{$bookmark->url}}</td>
                                <td>{{$bookmark->comment}}</td>
                                <td>php</td>
                                <td>{{$bookmark->created_at}}</td>
                                <td>{{$bookmark->public}}</td>
                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
