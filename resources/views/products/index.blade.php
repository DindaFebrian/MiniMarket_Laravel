@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="bg-gray-900 shadow rounded-lg p-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-pink-400">Products</h1>
            <a href="{{ url('/products/create') }}"
               class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                Add New Product
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-800 border border-gray-700 rounded-lg">
                <thead class="bg-gray-700">
                    <tr>
                        @foreach (['ID', 'Product Name', 'Price', 'Stock', 'Actions'] as $header)
                            <th class="text-left px-4 py-2 font-semibold text-pink-400 border-b border-gray-600">
                                {{ $header }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="hover:bg-gray-700">
                            <td class="px-4 py-2 text-pink-300 border-b border-gray-600">{{ $product->id }}</td>
                            <td class="px-4 py-2 text-pink-300 border-b border-gray-600">{{ $product->product_name }}</td>
                            <td class="px-4 py-2 text-pink-300 border-b border-gray-600">{{ $product->price }}</td>
                            <td class="px-4 py-2 text-pink-300 border-b border-gray-600">{{ $product->stock }}</td>
                            <td class="px-4 py-2 text-pink-300 border-b border-gray-600 flex space-x-2">
                                <a href="{{ url("/products/{$product->id}/edit") }}"
                                   class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-1 px-3 rounded shadow hover:shadow-md transition duration-300">
                                    Edit
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                      onsubmit="return confirm('Are you sure?')" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-3 rounded shadow hover:shadow-md transition duration-300">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
