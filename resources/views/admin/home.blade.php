@extends('layouts.admin')

@section('content')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row justify-content-center">
        <h1 class="mt-5">Welcome backs  {{ Auth::user()->name }}!</h1>
        <a href="{{route('admin.posts.index') }}">Create Post</a>
    </div>
</div>
@endsection
