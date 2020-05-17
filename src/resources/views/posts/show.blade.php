@extends('app')
@section('content')
    <div class="post mt-3 mt-md-5">
        <h3>{{ $post->title }}</h3>
        <p>Posted in <strong>{{ $post->category }}</strong> &mdash; Published <strong>{{ $post->created_at->format('M d, Y') }}</strong></p>
        <p class="content">{!! $post->content !!}</p>
        <p><a href="{{ route('posts.index') }}">Go Back</a></p>
    </div>
@endsection
