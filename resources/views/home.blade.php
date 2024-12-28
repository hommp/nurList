@extends('master.layout')

@section('title')
    Home
@endsection

@section('content')
    <div class="container my-[100px]" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h1 class="text-center mb-5">Remember your task</h1>
            </div>
        </div>

        <div id="carouselExampleAutoplaying" class="carousel slide shadow rounded-2" data-bs-ride="carousel">
            <div class="carousel-inner rounded-2">
                @foreach ($posts as $key => $post)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        @if ($post->image)
                            <img src="{{ asset('images/posts/' . $post->image) }}" class="d-block w-100"
                                style="width: 100%; height: 400px; object-fit: cover;" alt="Image for {{ $post->title }}">
                        @else
                            <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Placeholder Image">
                        @endif
                        <div class="carousel-caption bg-dark bg-opacity-50 rounded-2 p-2">
                            <h5>{{ $post->title }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h1 class="text-center m-5">All task</h1>

        <div class="row mt-4">
            @foreach ($posts as $post)
                <div class="col-md-6 mb-4">
                    <div class="card shadow position-relative">
                        @if ($post->image)
                            <img src="{{ asset('images/posts/' . $post->image) }}" class="card-img-top"
                                style="height: 200px; object-fit: cover;" alt="Image for {{ $post->title }}">
                        @else
                            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Placeholder Image">
                        @endif
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-dark">Read more</a>
                            <button class="btn btn-success">Task done</button>
                            <button class="btn btn-danger cancel-btn">Cancel</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.btn-success').forEach(function(button) {
                    button.addEventListener('click', function() {
                        const card = this.closest('.card');
                        const doneBadge = document.createElement('span');
                        doneBadge.className =
                            'badge bg-success position-absolute top-0 end-0 m-2 px-5 py-2';
                        doneBadge.innerText = 'Done';
                        card.appendChild(doneBadge);
                    });
                });

                document.querySelectorAll('.cancel-btn').forEach(function(button) {
                    button.addEventListener('click', function() {
                        const card = this.closest('.card');
                        const doneBadge = card.querySelector('.badge.bg-success');
                        if (doneBadge) {
                            doneBadge.remove();
                        }
                    });
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.btn-success').forEach(function(button) {
                    button.addEventListener('click', function() {
                        const card = this.closest('.card');
                        const doneBadge = document.createElement('span');
                        doneBadge.className =
                            'badge bg-success position-absolute top-0 end-0 m-2 px-5 py-2';
                        doneBadge.innerText = 'Done';
                        card.appendChild(doneBadge);

                        this.style.display = 'none';
                        card.querySelector('.btn-dark').style.display = 'none';
                    });
                });

                document.querySelectorAll('.cancel-btn').forEach(function(button) {
                    button.addEventListener('click', function() {
                        const card = this.closest('.card');
                        const doneBadge = card.querySelector('.badge.bg-success');
                        if (doneBadge) {
                            doneBadge.remove();
                        }

                        card.querySelector('.btn-success').style.display = 'inline-block';
                        card.querySelector('.btn-dark').style.display = 'inline-block';
                    });
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.btn-success').forEach(function(button) {
                    button.addEventListener('click', function() {
                        const card = this.closest('.card');
                        const doneBadge = document.createElement('span');
                        doneBadge.className =
                            'badge bg-success position-absolute top-0 end-0 m-2 px-5 py-2';
                        doneBadge.innerText = 'Done';
                        card.appendChild(doneBadge);

                        this.style.display = 'none';
                        card.querySelector('.btn-dark').style.display = 'none';
                        card.querySelector('.cancel-btn').style.display = 'inline-block';
                    });
                });

                document.querySelectorAll('.cancel-btn').forEach(function(button) {
                    button.addEventListener('click', function() {
                        const card = this.closest('.card');
                        const doneBadge = card.querySelector('.badge.bg-success');
                        if (doneBadge) {
                            doneBadge.remove();
                        }

                        card.querySelector('.btn-success').style.display = 'inline-block';
                        card.querySelector('.btn-dark').style.display = 'inline-block';
                        this.style.display = 'none';
                    });
                });

                document.querySelectorAll('.cancel-btn').forEach(function(button) {
                    button.style.display = 'none';
                });
            });
        </script>
    </div>
@endsection
