@extends('master.layout')


@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="col-md-8">
                <div class="card p-4 shadow">
                    <h1>Add Posts</h1>
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Categories</label>
                            <select class="form-select" name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Description</label>
                            <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-dark">Update</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
