@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    @if (count($posts) > 0)
        {{-- Loop Post --}}
        @foreach ($posts as $post)
            <div class="card">
                <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                <small>On {{$post->created_at}} </small>
            </div>
        @endforeach
        {{-- End Loop --}}
        {{-- Paginate Link --}}
        {{$posts->links()}}
    @else
        <h1>No posts</h1>
    @endif
</div>
@endsection
