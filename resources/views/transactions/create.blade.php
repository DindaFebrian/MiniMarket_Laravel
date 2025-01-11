@extends('layouts.app')

@section('title', 'Add Transaction')

@section('content')
    <div class="bg-gray-900 shadow rounded-lg p-6">
        <!-- Header Section -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-pink-400">Add New Transaction</h1>
            <div class="space-x-4">
                <button onclick="printTransactionForm()"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                    Print Form
                </button>
                <a href="{{ route('transactions.index') }}"
                   class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                    Back to Transactions
                </a>
            </div>
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
        <div id="printableArea">
            <form action="{{ route('transactions.store') }}" method="POST">
                @csrf

                <!-- Transaction Date -->
                <div class="mb-4">
                    <label for="date" class="block text-pink-400 font-bold mb-2">Transaction Date</label>
                    <input
                        type="date"
                        id="date"
                        name="date"
                        class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                        value="{{ old('date') }}"
                        required
                    >
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

                <!-- Employee -->
                <div class="mb-4">
                    <label for="employee_id" class="block text-pink-400 font-bold mb-2">Employee</label>
                    <select
                        id="employee_id"
                        name="employee_id"
                        class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                        required
                    >
                        <option value="">Select Employee</option>
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->id }}" {{ old('employee_id') == $employee->id ? 'selected' : '' }}>
                                {{ $employee->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Total Amount -->
                <div class="mb-4">
                    <label for="total" class="block text-pink-400 font-bold mb-2">Total Amount</label>
                    <input
                        type="number"
                        step="0.01"
                        id="total"
                        name="total"
                        class="w-full px-4 py-2 bg-gray-800 text-pink-300 border border-gray-700 rounded-lg focus:ring focus:ring-pink-500 focus:outline-none"
                        value="{{ old('total') }}"
                        required
                    >
                </div>

                <!-- Buttons -->
                <div class="flex space-x-4 mt-6">
                    <button type="submit"
                            class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded shadow hover:shadow-lg transition duration-300">
                        Save Transaction
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript for Printing -->
    <script>
        function printTransactionForm() {
            const printableArea = document.getElementById('printableArea').innerHTML;
            const originalContents = document.body.innerHTML;
            document.body.innerHTML = printableArea;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
