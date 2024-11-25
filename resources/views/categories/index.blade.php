@extends('master.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="padding-top: 100px;">

            <div class="card">
                <div class="card-header">Categories</div>
                <div class="m-3 justify-content-between">
                    <form method="GET" action="{{ route('categories.index') }}" class="me-2">
                        <div class="input-group">
                            <input type="text" name="search" value="{{ request()->input('search') }}" class="form-control" placeholder="Search Categories">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </form>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary my-3">Tambah Kategori</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>
@endsection