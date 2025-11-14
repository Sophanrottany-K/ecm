@extends('layouts.admin.master')
@section('title', 'create category')
@section('content')
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
        <form action="{{ route('category.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Category Name -->
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Category Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter category name"
                    required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label fw-semibold">Description</label>
                <textarea name="description" id="description" rows="3" class="form-control"
                    placeholder="Write short description..."></textarea>
            </div>

            <!-- Category Image -->
            <div class="mb-3">
                <label for="image" class="form-label fw-semibold">Category Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label fw-semibold">Status</label>
                <select name="status" id="status" class="form-select">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <!-- Submit -->
            <div class="text-end">
                <button type="submit" class="btn btn-primary px-4">Save</button>
                <a href="{{ route('category.index') }}" class="btn btn-secondary px-4">Cancel</a>
            </div>
        </form>
    @endsection
