@extends('master.layout')
@section('content')
<div class="container" style="padding-top: 100px;">
    <h1>{{ $category->name }}</h1>
    <p>Slug: {{ $category->slug }}</p>
    <a href="{{ route('/') }}">ggg</a>
</div>
@endsection