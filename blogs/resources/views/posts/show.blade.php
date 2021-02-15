@extends('layouts.app')
@section('content')
    <br>
    <a href="/Laravel-first-project/blogs/public/posts" class="btn btn-secondary">Go Back</a>
    <hr>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/Laravel-first-project/blogs/storage/app/public/cover_images/{{$post->cover_image}}" alt="">
    <div>
        {{$post->body}}
    </div>
    
    <small>Written on {{$post->created_at}} by  {{$post->user->name}}</small>
    <hr>
    @auth  
        @if (Auth::user()->id == $post->user_id)
            
        
            <a href="/Laravel-first-project/blogs/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            
            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endauth 
@endsection