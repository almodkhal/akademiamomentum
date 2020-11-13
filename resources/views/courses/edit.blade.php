@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Course</h1>
    {{-- Form Field --}}
    {!! Form::open(['action'=>['App\Http\Controllers\CoursesController@update', $course->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $course->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', $course->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description']) }}
        </div>
        <div class="form-group">
            {{ Form::label('short_description', 'Short Description') }}
            {{ Form::text('short_description', $course->short_description, ['class' => 'form-control', 'placeholder' => 'Short Description']) }}
        </div>
        <div class="form-group">
            {{ Form::label('length', 'Length') }}
            {{ Form::text('length', $course->length, ['class' => 'form-control', 'placeholder' => 'Length (Months)']) }}
        </div>
        <div class="form-group">
            {{ Form::label('time', 'Time') }}
            {{ Form::text('time', $course->time, ['class' => 'form-control', 'placeholder' => 'Time of Course']) }}
        </div>
        <div class="form-group">
            {{ Form::file('image') }}
        </div>
        {{ Form::hidden('_method', 'PUT') }}
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}



</div>
@endsection
