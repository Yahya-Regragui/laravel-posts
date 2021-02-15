@extends('layouts.app')
@section('content')
    <br>
    <a href="/Laravel-first-project/blogs/public/posts" class="btn btn-secondary">Go Back</a>
    <hr>
    <h1>{{$post->title}}</h1>
    
    <div>
        {{$post->body}}
    </div>
    
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/Laravel-first-project/blogs/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    
    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection