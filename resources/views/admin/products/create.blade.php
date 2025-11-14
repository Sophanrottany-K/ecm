@extends('layouts.admin.master')
@section('title', 'Create Product')
@section('content')

    <body>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                            <h1 class="m-0">Edit Departments</h1>

                        </div><!-- /.col -->

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/department') }}">Departments</li></a>
                                <li class="breadcrumb-item active">Admin Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div>
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0"><i class="bi bi-box"></i> Create New Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <!-- Product Name -->
                            <div class="form-group">
                                <label for="productName">Product Name <span class="text-danger">*</span></label>
                                <input type="text" name="product_name" id="productName" class="form-control"
                                    placeholder="Enter product name" required>
                            </div>

                            <!-- Price -->
                            <div class="form-group">
                                <label for="price">Price ($)</label>
                                <input type="number" name="price" id="price" class="form-control"
                                    placeholder="Enter price" step="0.01" min="0">
                            </div>

                            <!-- Category -->
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">Select category</option>
                                    <option value="electronics">Electronics</option>
                                    <option value="clothing">Clothing</option>
                                    <option value="home">Home & Living</option>
                                    <option value="beauty">Beauty</option>
                                </select>
                            </div>

                            <!-- Description -->
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" rows="4" class="form-control"
                                    placeholder="Enter product description"></textarea>
                            </div>

                            <!-- Image Upload -->
                            <div class="form-group">
                                <label for="image">Product Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image"
                                        accept="image/*">
                                    <label class="custom-file-label" for="image">Choose file...</label>
                                </div>
                            </div>

                            <!-- Stock Quantity -->
                            <div class="form-group">
                                <label for="stock">Stock Quantity</label>
                                <input type="number" name="stock" id="stock" class="form-control"
                                    placeholder="Enter stock amount" min="0">
                            </div>

                            <!-- Submit Buttons -->
                            <div class="text-right">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Save
                                    Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
