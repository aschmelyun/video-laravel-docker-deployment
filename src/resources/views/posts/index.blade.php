@extends('app')
@section('content')
    <h3 class="mt-3 mt-md-5">All Posts</h3>
    @foreach($posts as $post)
        <div class="post mt-3">
            <h5><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h5>
            <p>Posted in <strong>{{ $post->category }}</strong> &mdash; Published <strong>{{ $post->created_at->format('M d, Y') }}</strong></p>
        </div>
    @endforeach
@endsection
