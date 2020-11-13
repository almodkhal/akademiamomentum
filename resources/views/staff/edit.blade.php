@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Professor</h1>
    {{-- Form Field --}}
    {!! Form::open(['action'=>['App\Http\Controllers\StaffController@update', $staf->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', $staf->title, ['class' => 'form-control', 'placeholder' => 'Full Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('bio', 'Bio') }}
            {{ Form::textarea('bio', $staf->bio, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Bio']) }}
        </div>
        <div class="form-group">
            {{ Form::file('image') }}
        </div>
        {{ Form::hidden('_method', 'PUT') }}
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}



</div>
@endsection
