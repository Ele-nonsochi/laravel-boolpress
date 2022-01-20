@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf

            <div class="text-start mt-5">
                <div class="mb-3">
                    <label for="field_name" class="form-label">Author</label>
                    <input type="text" class="form-control" name="name" id="field_title">
                </div>
    
                <div class="mb-3">
                    <label for="field_title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="field_title">
                </div>
                
                <div class="mb-3">
                    <label for="field_content" class="form-label">Text</label>
                    <input type="text" class="form-control" name="content" id="field_content">
                </div>
    
                
    
                <button class="btn btn-primary" type="submit">Add</button>
            </div>

        </form>
    </div>
@endsection

{{-- <form action="{{ route('admin.posts.update', $user->id) }}" method="POST"
  class="mb-5">
  @csrf
  @method('put')

  <div class="form-group">
    <label class="form-label">Nome</label>
    <input id="name" type="text"
      class="form-control @error('name') is-invalid @enderror" name="name"
      value="{{ $user->name }}" required autocomplete="name">
</div>

  <div class="form-group">
    <label class="form-label">Email</label>
    <input id="email" type="email"
      class="form-control @error('email') is-invalid @enderror" name="email"
      value="{{ $user->email }}" required autocomplete="email">
  </div>

  <div class="d-flex">
    <a href="{{route('admin.users.index')}}"
      class="btn btn-outline-secondary mr-3" type="reset">Annulla</a>
    <button class="btn btn-success" type="submit">Salva</button>
  </div>

</form> --}}