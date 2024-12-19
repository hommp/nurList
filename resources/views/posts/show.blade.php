@extends('master.layout')

@section('content')
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-light">{{ $post->title }}</div>
                    <p class="m-3 mb-0 text-center rounded">Categories: {{ $post->category->name }}</p>
                    @if ($post->image)
                        <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}"
                            class="img-fluid m-3 rounded mb-0">
                    @else
                        <p>No image available</p>
                    @endif
                    <p class="m-3 mb-0 border p-3 rounded">{{ $post->body }}</p>
                    <a class="btn btn-dark m-3" href="javascript:history.back()">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
