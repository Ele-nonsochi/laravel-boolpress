@extends('layouts.admin')


@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.update', $post->id)}}" method="post">
            @csrf
            @method('put')

            <div class="text-start mt-5">
                <div class="mb-3">
                    <label for="field_name" class="form-label">Author</label>
                    <input type="text" class="form-control" name="name" id="field_name" value="{{ old('name') ?? $post->name }}">
                </div>
    
                <div class="mb-3">
                    <label for="field_title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="field_title" value="{{ old('title') ?? $post->title }}">
                </div>
                
                <div class="mb-3">
                    <label for="field_content" class="form-label">Text</label>
                    <input type="text" class="form-control" name="content" id="field_content" value="{{ old('content') ?? $post->content }}">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-control">
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <label for="tag" class="form-label">Tag</label>
                  <select name="tags[]" id="tag" class="form-control" multiple>
                      @foreach ($tags as $tag)
                          <option value="{{$tag->id}}" @if ($post->tags->contains($tag)) selected @endif>{{$tag->name}}</option>
                      @endforeach
                  </select>
                
    
                <button class="btn btn-primary" type="submit">Add Change</button>
            </div>


            
            
        </form>
    </div>
@endsection