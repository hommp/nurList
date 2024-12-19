@extends('master.layout')

@section('content')
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-light text-center">Categories</div>

                    <div class="m-3 justify-content-between">
                        @auth
                            <form method="GET" action="{{ route('categories.index') }}">
                                <div class="input-group mb-3">
                                    <input type="text" name="search" class="form-control" placeholder="Search categories">
                                    <button class="btn btn-dark">Search</button>
                                </div>
                            </form>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif


                            @if ($errors->any())
                                @foreach ($errors->all() as $err)
                                    <div class="alert alert-danger">
                                        {{ $err }}
                                    </div>
                                @endforeach
                            @endif

                            <a href="{{ route('categories.create') }}" class="btn btn-dark my-3">Add</a>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->created_at->timezone('Asia/Jakarta')->format('Y-m-d H:i:s') }}
                                            </td>
                                            <td>
                                                <a href="{{ route('categories.show', $category) }}"
                                                    class="btn btn-sm btn-primary m-1">View</a>
                                                <a href="{{ route('categories.edit', $category) }}"
                                                    class="btn btn-sm btn-warning m-1">Edit</a>
                                                <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger m-1"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $categories->links() }}
                    @else
                        <p>You are not logged in. Please <a href="{{ route('signin') }}">log in</a> to view categories.</p>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
