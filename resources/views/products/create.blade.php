@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
    <div class="card">
        <h1>Create Product</h1>

        @if ($errors->any())
            <div class="alert alert-error">
                <strong>Perbaiki input berikut:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" value="{{ old('price') }}">
            </div>

            <div class="actions">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('products.index') }}" class="btn btn-outline">Cancel</a>
            </div>
        </form>
    </div>
@endsection
