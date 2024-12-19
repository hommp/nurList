@extends('master.layout')
@section('content')
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4 shadow">
                    <h1>{{ $category->name }}</h1>
                    <p>Slug: {{ $category->slug }}</p>
                    <a class="btn btn-dark mb-3" href="javascript:history.back()">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
