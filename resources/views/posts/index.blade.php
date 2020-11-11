@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">Posts</h1>
    @if (count($posts) > 0)
        {{-- Loop Post --}}
        @foreach ($posts as $post)
            <div class="card-mb-3" style="max-width:700px;">
                <div class="row no-gutters">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%;" class="card-img" src="/storage/images/{{ $post->image }}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="card-body">
                            <h3 class="card-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                            <p class="card-text">{!! $post->description !!}</p>
                            <p class="card-text"><small>On {{$post->created_at}} </small></p>
                        </div>
                    </div>
                </div>
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
