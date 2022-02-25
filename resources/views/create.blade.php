@extends('layout')
@section('content')


    <form action="/posts" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea class="form-control" id="body" rows="3" name="body"></textarea>
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
@endsection