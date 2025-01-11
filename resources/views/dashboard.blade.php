<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-pink-500 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
                <!-- Konten Berbasis Role -->
                @if (Auth::user()->role === 'admin')
                <div class="py-12 bg-gradient-to-b from-black via-gray-900 to-gray-800">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-gray-900 border border-pink-500 overflow-hidden shadow-lg sm:rounded-lg">
                            <div class="p-6 text-white">
                                <h3 class="text-xl font-bold text-pink-400 mb-4">Welcome Back!</h3>
                                <p class="text-gray-300">
                                    {{ __("You're logged in as ") }} <span class="text-pink-500">{{ ucfirst(Auth::user()->role) }}</span>.
                                </p>
                            </div>
                        </div>
                @elseif (Auth::user()->role === 'manager')
                    <!-- Konten Manager -->
                    <div class="bg-gray-800 border border-gray-700 rounded-lg shadow-lg p-4">
                        <h4 class="text-lg font-semibold text-pink-400 mb-2">Manager Dashboard</h4>
                        <ul class="text-gray-300">
                            <li><a href="/manage-branches" class="hover:text-pink-500">Manage Branches</a></li>
                            <li><a href="/generate-reports" class="hover:text-pink-500">Generate Reports</a></li>
                        </ul>
                    </div>
                @elseif (Auth::user()->role === 'supervisor')
                    <!-- Konten Supervisor -->
                    <div class="bg-gray-800 border border-gray-700 rounded-lg shadow-lg p-4">
                        <h4 class="text-lg font-semibold text-pink-400 mb-2">Supervisor Dashboard</h4>
                        <ul class="text-gray-300">
                            <li><a href="/supervise-transactions" class="hover:text-pink-500">Supervise Transactions</a></li>
                            <li><a href="/supervise-employees" class="hover:text-pink-500">Supervise Employees</a></li>
                        </ul>
                    </div>
                @elseif (Auth::user()->role === 'kasir')
                    <!-- Konten Kasir -->
                    <div class="bg-gray-800 border border-gray-700 rounded-lg shadow-lg p-4">
                        <h4 class="text-lg font-semibold text-pink-400 mb-2">Kasir Dashboard</h4>
                        <ul class="text-gray-300">
                            <li><a href="/process-sales" class="hover:text-pink-500">Process Sales</a></li>
                            <li><a href="/daily-sales" class="hover:text-pink-500">View Daily Sales</a></li>
                        </ul>
                    </div>
                @elseif (Auth::user()->role === 'gudang')
                    <!-- Konten Gudang -->
                    <div class="bg-gray-800 border border-gray-700 rounded-lg shadow-lg p-4">
                        <h4 class="text-lg font-semibold text-pink-400 mb-2">Gudang Dashboard</h4>
                        <ul class="text-gray-300">
                            <li><a href="/manage-stock" class="hover:text-pink-500">Manage Stock</a></li>
                            <li><a href="/stock-inventory" class="hover:text-pink-500">View Inventory</a></li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
