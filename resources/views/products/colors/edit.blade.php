@extends('layouts.admin.master')
@section('title', 'Edit Color')
@section('content')

    <div class="container-fluid py-4">
        <h2>Edit Color</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('color.update', $color->color_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Color Name</label>
                <input type="text" name="name" class="form-control" id="name"
                    value="{{ old('name', $color->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="code" class="form-label">Color Code (e.g., #ff0000)</label>
                <input type="text" name="code" class="form-control" id="code"
                    value="{{ old('code', $color->code) }}">
            </div>
            <button type="submit" class="btn btn-success">Update Color</button>
            <a href="{{ route('color.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    </div>
@endsection
