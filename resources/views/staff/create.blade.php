@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a Professor</h1>
    {{-- Form Field --}}
    {!! Form::open(['action'=>'App\Http\Controllers\StaffController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Full Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('bio', 'Bio') }}
            {{ Form::textarea('bio', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Bio']) }}
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
            {{ Form::file('image') }}
        </div>
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}



</div>
@endsection
