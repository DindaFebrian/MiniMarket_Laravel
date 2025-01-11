@extends('layouts.app')

@section('title', 'Create New Branch')

@section('content')
    <div class="bg-gray-900 shadow rounded-lg p-6">
        <!-- Header Section -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-pink-400">Create New Branch</h1>
            <a href="{{ route('branches.index') }}"
               class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                Back to Branches
            </a>
        </div>

        <!-- Form Section -->
        <form action="{{ route('branches.store') }}" method="POST">
            @csrf <!-- Token keamanan untuk mencegah CSRF -->

            <!-- Branch Name -->
            <div class="mb-4">
                <label for="branch_name" class="block text-pink-400 font-bold mb-2">Branch Name</label>
                <input
                    type="text"
                    name="branch_name"
                    id="branch_name"
                    class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                    placeholder="Enter branch name"
                    required
                >
            </div>

            <!-- Address -->
            <div class="mb-4">
                <label for="address" class="block text-pink-400 font-bold mb-2">Address</label>
                <textarea
                    name="address"
                    id="address"
                    class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                    rows="3"
                    placeholder="Enter address"
                    required
                ></textarea>
            </div>

            <!-- City -->
            <div class="mb-4">
                <label for="city" class="block text-pink-400 font-bold mb-2">City</label>
                <input
                    type="text"
                    name="city"
                    id="city"
                    class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                    placeholder="Enter city"
                    required
                >
            </div>

            <!-- Buttons -->
            <div class="flex space-x-4 mt-6">
                <button type="submit"
                        class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                    Save
                </button>
                <a href="{{ route('branches.index') }}"
                   class="bg-gray-700 hover:bg-gray-800 text-pink-300 font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
