@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a Course</h1>
    {{-- Form Field --}}
    {!! Form::open(['action'=>'App\Http\Controllers\CoursesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
        <div class="form-group">
            {{ Form::label('length', 'Length') }}
            {{ Form::text('length', '', ['class' => 'form-control', 'placeholder' => 'Length (Months)']) }}
        </div>
        <div class="form-group">
            {{ Form::label('time', 'Time') }}
            {{ Form::text('time', '', ['class' => 'form-control', 'placeholder' => 'Time of Course']) }}
        </div>
        <div class="form-group">
            <label for="post">Departamenti</label>
            <select name="post" class="form-control" id="post">
                @foreach($posts as $post)
                    <option value="{{$post->id}}"
                        @if (isset($post))
                            @if ($post->id === $post->post_id)
                                selected
                            @endif
                        @endif
                        >{{$post->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="staf">Instructor</label>
            <select name="staf" class="form-control" id="staf">
                @foreach($staff as $staf)
                    <option value="{{$staf->id}}"
                        @if (isset($staf))
                            @if ($staf->id === $staf->staf_id)
                                selected
                            @endif
                        @endif
                        >{{$staf->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            {{ Form::file('image') }}
        </div>
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}



</div>
@endsection
