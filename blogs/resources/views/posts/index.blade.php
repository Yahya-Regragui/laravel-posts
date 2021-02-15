@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0)
    @foreach ($posts as $post)
        
        <div class="list-group" >
            <div class="list-group-item list-group-item-action">
                <div class="row">
                    <div class="col-md-4 col-sm-4 " >
                        <img style="width:100%" src="/Laravel-first-project/blogs/storage/app/public/cover_images/{{$post->cover_image}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8 " >
                        <h3> <a href="/Laravel-first-project/blogs/public/posts/{{$post->id}}"> {{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by  {{$post->user->name}}</small>
                    </div>
                </div>
                
                
        </div>
        </div>
    @endforeach
        @else
            <p>No posts found</p>
    @endif
@endsection