@extends('layout')
@section('content')
        <a href="/posts/create" class="btn btn-primary">Add Post</a>
        @foreach($posts as $post)
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->body}}</p>
                </div>
            </div>
        @endforeach
@endsection