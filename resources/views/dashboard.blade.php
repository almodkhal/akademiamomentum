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
                    <a href="/posts/create" class="btn btn-success float-right" style="margin-top: -10px;">Create Post</a>
                    <h3>Posts</h3>
                    @if (count($posts) > 0)


                    <table class="table table-striped">
                        <tr>
                            <th scope="col">Nr</th>
                            <th scope="col">Title</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td scope="row">{{ $post->id }}</td>
                                <td >{{ $post->title }}</td>
                                <td><a class="btn btn-primary" href="/posts/{{ $post->id }}/edit">Edit</a></td>
                                <td>{!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {!! Form::close() !!}</td>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        <p>You Have No Posts!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
