@extends('layouts.admin.master')
@section('title', 'Sizes')
@section('content')

    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between mb-3">
            <h2>All Sizes</h2>
            <a href="{{ route('size.create') }}" class="btn btn-primary">Add New Size</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Size</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sizes as $size)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $size->name }}</td>
                        <td>
                            <a href="{{ route('size.edit', $size->size_id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('size.destroy', $size->size_id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Delete this size?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
