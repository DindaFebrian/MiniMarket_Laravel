@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
    <div class="bg-gray-900 shadow rounded-lg p-6">
        <!-- Header Section -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-pink-400">Add New Employee</h1>
            <a href="{{ route('employees.index') }}"
               class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                Back to Employees
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
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf

            <!-- Employee Name -->
            <div class="mb-4">
                <label for="name" class="block text-pink-400 font-bold mb-2">Employee Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                    value="{{ old('name') }}"
                    required
                >
            </div>

            <!-- Position -->
            <div class="mb-4">
                <label for="position" class="block text-pink-400 font-bold mb-2">Position</label>
                <select
                    id="position"
                    name="position"
                    class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                    required
                >
                    <option value="">Select Position</option>
                    <option value="Store Manager" {{ old('position') == 'Store Manager' ? 'selected' : '' }}>Store Manager</option>
                    <option value="Supervisor" {{ old('position') == 'Supervisor' ? 'selected' : '' }}>Supervisor</option>
                    <option value="Cashier" {{ old('position') == 'Cashier' ? 'selected' : '' }}>Cashier</option>
                    <option value="Waiter" {{ old('position') == 'Waiter' ? 'selected' : '' }}>Waiter</option>
                    <option value="Cleaner" {{ old('position') == 'Cleaner' ? 'selected' : '' }}>Cleaner</option>
                </select>
            </div>

            <!-- Branch -->
            <div class="mb-4">
                <label for="branch_id" class="block text-pink-400 font-bold mb-2">Branch</label>
                <select
                    id="branch_id"
                    name="branch_id"
                    class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                    required
                >
                    <option value="">Select Branch</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('branch_id') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->branch_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex space-x-4 mt-6">
                <button type="submit"
                        class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                    Save Employee
                </button>
                <a href="{{ route('employees.index') }}"
                   class="bg-gray-700 hover:bg-gray-800 text-pink-300 font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
