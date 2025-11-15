@extends('layouts.admin.master')
@section('title', 'Products')
@section('content')

    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between mb-3">
            <h2>All Products</h2>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Add New Product</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price ($)</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $product->image) }}" width="60">

                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->category_name ?? 'N/A' }}</td>
                        <td>{{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <a href="{{ route('product.edit', $product->product_id) }}"
                                class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('product.destroy', $product->product_id) }}" method="POST"
                                class="d-inline" onsubmit="return confirm('Delete this product?');">
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
