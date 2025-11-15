@extends('layouts.admin.master')
@section('title', 'Edit Size')
@section('content')

    <div class="container-fluid py-4">
        <h2>Edit Size</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('size.update', $size->size_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Size Name</label>
                <input type="text" name="name" class="form-control" id="name"
                    value="{{ old('name', $size->name) }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update Size</button>
            <a href="{{ route('size.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

@endsection
