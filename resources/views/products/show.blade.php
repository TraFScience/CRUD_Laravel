@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="card">
        <div class="page-header">
            <h1>{{ $product->name }}</h1>
            <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>
        </div>

        <div class="detail-block">
            <div class="detail-label">Description</div>
            <p class="muted" style="margin:0;">{{ $product->description }}</p>
        </div>

        <div class="detail-block">
            <div class="detail-label">Price</div>
            <p class="price" style="margin:0;">{{ $product->price }}</p>
        </div>

        <div class="actions">
            <a href="{{ route('products.index') }}" class="btn btn-outline">Back to List</a>
        </div>
    </div>
@endsection
