@extends('layouts.admin.master')

@section('title', 'Create Category')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Category</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Categories</a></li>
                        <li class="breadcrumb-item active">Admin Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Category Form -->
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Category Name -->
        <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Category Name</label>
            <input type="text" name="category_name" id="name" class="form-control" placeholder="Enter category name"
                value="{{ old('category_name') }}" required>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label fw-semibold">Description</label>
            <textarea name="description" id="description" rows="3" class="form-control"
                placeholder="Write short description...">{{ old('description') }}</textarea>
        </div>

        <!-- Status -->


        <!-- Submit Buttons -->
        <div class="text-end">
            <button type="submit" class="btn btn-primary px-4">Save</button>
            <a href="{{ route('category.index') }}" class="btn btn-secondary px-4">Cancel</a>
        </div>
    </form>
    </div>
@endsection
