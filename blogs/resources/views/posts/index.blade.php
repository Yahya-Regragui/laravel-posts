@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0)
    @foreach ($posts as $post)
        <div class="list-group" >
            <div class="list-group-item list-group-item-action">
            <h3> <a href="/Laravel-first-project/blogs/public/posts/{{$post->id}}"> {{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
        </div>
        </div>
    @endforeach
        @else
            <p>No posts found</p>
    @endif
@endsection