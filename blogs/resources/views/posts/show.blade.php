@extends('layouts.app')
@section('content')
<br>
    <a href="/Laravel-first-project/blogs/public/posts" class="btn btn-secondary">Go Back</a>

    <h1>{{$post->title}}</h1>
    
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection