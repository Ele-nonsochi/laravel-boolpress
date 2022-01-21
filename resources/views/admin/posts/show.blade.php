@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{$post->title}} ,  {{$post->category->name}} </h1>
        <p>{{$post->content}}</p>
       
       <div class="form-group">
            <strong>Tag</strong>
            <br>
            @foreach($post->tags as $tag)
            <span class="badge bg-primary text-white">{{$tag->name}}</span>
            @endforeach
          </div>
          
        
        <a class="btn btn-success" href="{{route('admin.posts.edit', $post->id)}}">Change Post</a>
        <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" class="d-inline-block">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Delete Post</button>
        </form>
    </div>
@endsection