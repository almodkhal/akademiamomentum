@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">All Posts</h1>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="/posts/create" class="btn btn-success float-right" style="margin-top: -10px;">Create Post</a>
        <h3>Posts</h3>
        @if (count($posts) > 0)


        <table class="table table-striped">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Icon</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>

            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ ($posts->total()-$loop->index)-(($posts->currentpage()-1) * $posts->perpage() ) }}</td>
                    <td scope="row"><img style="float: left; width: 100px; height: 100px; object-fit: cover;" class="card-img" src="/storage/images/{{ $post->png }}" alt=""></td>
                    <td scope="row"><img style="float: left; width: 100px; height: 100px; object-fit: cover;" class="card-img" src="/storage/images/{{ $post->image }}" alt=""></td>
                    <td >{{ $post->title }}</td>
                    <td><a class="btn btn-primary" href="/posts/{{ $post->id }}/edit">Edit</a></td>
                    <td>{!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}</td>
                </tr>
            @endforeach

        </table>
        {{ $posts->links('pagination::bootstrap-4') }}
        @else
            <p>You Have No Posts!</p>
        @endif
    </div>
</div>
@endsection
