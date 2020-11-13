@extends('layouts.app')

@section('content')
<div class="container">

        <h1>{{$course->title}}</h1>

        <img style="width:100%;" class="card-img" src="/storage/images/{{ $course->image }}" alt="">
        <br>
        <br>
        <small>Written on {{$course->created_at}}</small>
        <div>
            {!! $course->description !!}
        </div>
        <hr>

        @if (!Auth::guest())
            @if (Auth::user()->id == $course->user_id)
                <a href="/courses/{{ $course->id }}/edit" class="btn btn-primary">Edit</a>

                {!! Form::open(['action' => ['App\Http\Controllers\CoursesController@destroy', $course->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {!! Form::close() !!}
            @endif
        @endif
</div>
@endsection
