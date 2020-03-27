@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Categories</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>kategori</th>
                                <th>keterangan</th>
                                <th>Foto</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->kategori }}</td>
                                        <td>{{ $category->keterangan }}</td>
                                        <td>{{ $categories->foto ?? '$foto' }}</td>
                                        <td>{{ $category->harga ?? '$harga' }}</td>
                                        <td></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No records found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ url('admin/categories/create') }}" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection