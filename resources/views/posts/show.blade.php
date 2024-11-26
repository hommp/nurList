@extends('master.layout')

@section('content')
<div class="container" style="padding-top: 100px;">
    <h1>{{ $post->title }}</h1>
    <p>Kategori: {{ $post->category->name }}</p>
    @if ($post->image)
    <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
    @else
    <p>No image available</p>
    @endif
    <p>{{ $post->body }}</p>
    <a class="btn btn-primary mb-3" href="javascript:history.back()">Back</a>
</div>
@endsection
