@extends('master.layout')
@section('content')
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4 shadow">
                    <h1>Add categories</h1>
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
