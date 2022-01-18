@extends('layouts.admin')

@section('content')
<h1>Post</h1>

<a href="{{ route('admin.posts.create') }}">New Post</a>

@foreach ($posts as $post)
    <div class="card mt-4">
        <h2><a href="{{route('admin.posts.show', $post->id)}}"> {{$post->title}}</a></h2>
        <p>{{$post->article}}</p>
    </div>
@endforeach
@endsection