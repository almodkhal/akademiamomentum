@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">All Staff</h1>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="/staff/create" class="btn btn-success float-right" style="margin-top: -10px;">Create Professor</a>
        <h3>Staff</h3>
        @if (count($staff) > 0)


        <table class="table table-striped">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>

            @foreach ($staff as $staf)
                <tr>

                    {{-- @for ($i = 1; $i > $post->count(); $i++)


                    @endfor --}}
                    <td scope="row">{{ ($staff->total()-$loop->index)-(($staff->currentpage()-1) * $staff->perpage() ) }}</td>
                    <td scope="row"><img style="float: left; width: 100px; height: 100px; object-fit: cover;" class="card-img" src="/storage/images/{{ $staf->image }}" alt=""></td>
                    <td >{{ $staf->name }}</td>
                    <td><a class="btn btn-primary" href="/staff/{{ $staf->id }}/edit">Edit</a></td>
                    <td>{!! Form::open(['action' => ['App\Http\Controllers\StaffController@destroy', $staf->id], 'method' => 'POST']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}</td>
                </tr>
            @endforeach

        </table>
        {{ $staff->links('pagination::bootstrap-4') }}
        @else
            <p>You Have No Staff!</p>
        @endif
    </div>
</div>
@endsection
