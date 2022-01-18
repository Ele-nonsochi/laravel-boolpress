@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>

        <a class="btn btn-success" href="{{route('admin.posts.edit', $post->id)}}">Change Post</a>

        <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" class="d-inline-block">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Delete Post</button>
        </form>
    </div>
@endsection