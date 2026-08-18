@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="card">
        <div class="page-header">
            <h1>Product List</h1>
            <a href="{{ route('products.create') }}" class="btn btn-primary">+ Add New Product</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($products->isEmpty())
            <p class="muted">Belum ada produk.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td class="muted">{{ $product->description }}</td>
                            <td class="price">{{ $product->price }}</td>
                            <td>
                                <div class="actions" style="margin-top:0;">
                                    <a href="{{ route('products.show', $product) }}" class="btn btn-outline btn-sm">Show</a>
                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-outline btn-sm">Edit</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
