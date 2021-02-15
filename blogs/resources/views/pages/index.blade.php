@extends('layouts.app')
@section('content')
<div class="jumbotron text-center "  >
    <h1>{{$title}}</h1>
    <p>this is the laravel application from traversy media</p>
    <p><a class="btn btn-primary btn-lg" href="/Laravel-first-project/blogs/public/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/Laravel-first-project/blogs/public/register" role="button">Register</a></p>
</div>
@endsection

