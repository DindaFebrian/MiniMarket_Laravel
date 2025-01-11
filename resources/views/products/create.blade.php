@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
    <div class="bg-gray-900 shadow rounded-lg p-6">
        <!-- Header Section -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-pink-400">Add New Product</h1>
            <a href="{{ route('products.index') }}"
               class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                Back to Products
            </a>
        </div>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="bg-red-500 text-white rounded-lg p-4 mb-6">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Section -->
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <!-- Product Name -->
            <div class="mb-4">
                <label for="product_name" class="block text-pink-400 font-bold mb-2">Product Name</label>
                <input
                    type="text"
                    id="product_name"
                    name="product_name"
                    class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                    value="{{ old('product_name') }}"
                    required
                >
            </div>

            <!-- Price -->
            <div class="mb-4">
                <label for="price" class="block text-pink-400 font-bold mb-2">Price</label>
                <input
                    type="number"
                    step="0.01"
                    id="price"
                    name="price"
                    class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                    value="{{ old('price') }}"
                    required
                >
            </div>

            <!-- Stock -->
            <div class="mb-4">
                <label for="stock" class="block text-pink-400 font-bold mb-2">Stock</label>
                <input
                    type="number"
                    id="stock"
                    name="stock"
                    class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                    value="{{ old('stock') }}"
                    required
                >
            </div>

            <!-- Buttons -->
            <div class="flex space-x-4 mt-6">
                <button type="submit"
                        class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                    Save Product
                </button>
                <a href="{{ route('products.index') }}"
                   class="bg-gray-700 hover:bg-gray-800 text-pink-300 font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
