@extends('master.layout')

@section('title')
    Contact
@endsection

@section('content')
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-4">Contact Us</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <ul class="list-unstyled m-3">
                            <li class="mb-3">
                                <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none text-dark">
                                    <i class="bi bi-instagram fs-4"></i> Instagram
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none text-dark">
                                    <i class="bi bi-facebook fs-4"></i> Facebook
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://x.com/" target="_blank" class="text-decoration-none text-dark">
                                    <i class="bi bi-twitter fs-4"></i> Twitter
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="mailto:youremail@example.com" class="text-decoration-none text-dark">
                                    <i class="bi bi-envelope fs-4"></i> Email
                                </a>
                            </li>
                            <li class="">
                                <a href="https://github.com/" target="_blank" class="text-decoration-none text-dark">
                                    <i class="bi bi-github fs-4"></i> GitHub
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
