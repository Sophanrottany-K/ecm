@extends('layouts.admin.master')
@section('title', 'Edit Category')

@section('content')
    <div class="container-fluid py-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="bi bi-pencil-square"></i> Edit Category</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update', $category->category_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
                        <input type="text" name="category_name" id="name" class="form-control"
                            value="{{ old('category_name', $category->category_name) }}" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" rows="4" class="form-control">{{ old('description', $category->description) }}</textarea>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('category.index') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Update Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
