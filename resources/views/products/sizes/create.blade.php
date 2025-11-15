@extends('layouts.admin.master')
@section('title', 'Create Size')
@section('content')


    <h2>Create New Size</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('size.store') }}" method="POST">
        @csrf


        <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Size Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Size name"
                value="{{ old('name') }}" required>
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-success">Save Size</button>
            <a href="{{ route('size.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
        <!-- Description -->


    </form>


@endsection
