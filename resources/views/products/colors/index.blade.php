@extends('layouts.admin.master')
@section('title', 'Colors')
@section('content')

    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between mb-3">
            <h2>All Colors</h2>
            <a href="{{ route('color.create') }}" class="btn btn-primary">Add New Color</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colors as $color)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $color->name }}</td>
                        <td>
                            @if ($color->code)
                                <span
                                    style="background: {{ $color->code }}; padding: 5px 15px; display: inline-block;"></span>
                                {{ $color->code }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('color.edit', $color->color_id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('color.destroy', $color->color_id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Delete this color?');">
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
    </div>
@endsection
