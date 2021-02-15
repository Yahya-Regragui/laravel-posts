@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if (count($posts)>0)
                            
                            <table class="table table-striped " >
                            
                                @foreach ($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a class="btn btn-primary" href="/Laravel-first-project/blogs/public/posts/{{$post->id}}/edit">Edit</a></th>
                                    <td>
                                        {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            @else
                                <p>You have no posts</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
