@extends('master.layout')

@section('content')
<div class="">
    <div class="">
        <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="">
                <div class="p-4">
                    <h1>{{ $post->title }}</h1>
                    <p class="pb-4">Kategori: {{ $post->category->name }}</p>
                    @if ($post->image)
                    <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}"
                        class="img-fluid pb-4">
                    @else
                    <p>No image available</p>
                    @endif
                    <p>{{ $post->body }}</p>
                    <a class="btn btn-primary mb-3" href="javascript:history.back()">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection