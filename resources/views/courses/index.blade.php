@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">All Courses</h1>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="/courses/create" class="btn btn-success float-right" style="margin-top: -10px;">Create Course</a>
        <h3>Courses</h3>
        @if (count($courses) > 0)


        <table class="table table-striped">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Departamenti</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>

            @foreach ($courses as $course)
                <tr>
                    <td scope="row">{{ ($courses->total()-$loop->index)-(($courses->currentpage()-1) * $courses->perpage() ) }}</td>
                    <td scope="row"><img style="float: left; width: 100px; height: 100px; object-fit: cover;" class="card-img" src="/storage/images/{{ $course->image }}" alt=""></td>
                    <td >{{ $course->title }}</td>
                    <td ><a href="{{ route('posts.index', $course->post_id) }}">{{ $course->post->title }}</a></td>
                    <td ><a href="{{ route('staff.index', $staf->course_id) }}">{{ $staf->course->title }}</a></td>
                    <td><a class="btn btn-primary" href="/courses/{{ $course->id }}/edit">Edit</a></td>
                    <td>{!! Form::open(['action' => ['App\Http\Controllers\CoursesController@destroy', $course->id], 'method' => 'POST']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}</td>
                </tr>
            @endforeach

        </table>
        {{ $courses->links('pagination::bootstrap-4') }}
        @else
            <p>You Have No Courses!</p>
        @endif
    </div>
</div>
@endsection
