@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {!! $post->description !!}
    </div>
    <hr>
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
</div>
@endsection
