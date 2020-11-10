@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a Post</h1>
    {{-- Form Field --}}
    {!! Form::open(['action'=>'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description']) }}
        </div>
        <div class="form-group">
            {{ Form::label('short_description', 'Short Description') }}
            {{ Form::text('short_description', '', ['class' => 'form-control', 'placeholder' => 'Short Description']) }}
        </div>
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}



</div>
@endsection
