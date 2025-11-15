@extends('layouts.admin.master')
@section('title', 'Create Product')
@section('content')

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create New Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a></li>
                        <li class="breadcrumb-item active">Admin Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
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

    <!-- Product Form -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><i class="bi bi-box"></i> Create New Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Product Name -->
                <div class="form-group mb-3">
                    <label for="productName">Product Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="productName" class="form-control" value="{{ old('name') }}"
                        required>
                </div>

                <!-- Price -->
                <div class="form-group mb-3">
                    <label for="price">Price ($) <span class="text-danger">*</span></label>
                    <input type="number" name="price" id="price" class="form-control" step="0.01" min="0"
                        value="{{ old('price') }}" required>
                </div>

                <!-- Category -->
                <div class="form-group mb-3">
                    <label for="category">Category <span class="text-danger">*</span></label>
                    <select name="category_id" id="category" class="form-control" required>
                        <option value="">Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->category_id }}"
                                {{ old('category_id') == $category->category_id ? 'selected' : '' }}>
                                {{ $category->category_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Size -->
                <div class="form-group mb-3">
                    <label for="size">Size <span class="text-danger">*</span></label>
                    <select name="size_id" id="size" class="form-control" required>
                        <option value="">Select size</option>
                        @foreach ($sizes as $size)
                            <option value="{{ $size->size_id }}" {{ old('size_id') == $size->size_id ? 'selected' : '' }}>
                                {{ $size->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Color -->
                <div class="form-group mb-3">
                    <label for="color">Color <span class="text-danger">*</span></label>
                    <select name="color_id" id="color" class="form-control" required>
                        <option value="">Select color</option>
                        @foreach ($colors as $color)
                            <option value="{{ $color->color_id }}"
                                {{ old('color_id') == $color->color_id ? 'selected' : '' }}>
                                {{ $color->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Description -->
                <div class="form-group mb-3">
                    <label for="description">Description </label>
                    <textarea name="description" id="description" rows="4" class="form-control">{{ old('description') }}</textarea>
                </div>

                <!-- Image -->
                <div class="form-group mb-3">
                    <label for="image">Product Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                </div>

                <!-- Stock -->
                <div class="form-group mb-3">
                    <label for="stock">Stock Quantity <span class="text-danger">*</span></label>
                    <input type="number" name="stock" id="stock" min="0" class="form-control"
                        value="{{ old('stock') }}" required>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Status <span class="text-danger">*</span></label>

                    @foreach (['Active', 'Inactive', 'OutOfStock', 'Discontinued', 'Draft'] as $status)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="{{ $status }}"
                                id="status_{{ strtolower($status) }}" {{ old('status') === $status ? 'checked' : '' }}
                                required>

                            <label class="form-check-label" for="status_{{ strtolower($status) }}">
                                {{ $status }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <!-- Submit -->
                <div class="text-end">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Save Product
                    </button>
                </div>
            </form>

        </div>
    </div>
    </div>
@endsection
