<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-pink-500 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-b from-black via-gray-900 to-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 border border-pink-500 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-white">
                    <h3 class="text-xl font-bold text-pink-400 mb-4">Welcome Back!</h3>
                    <p class="text-gray-300">
                        {{ __("You're logged in! Feel free to explore the dashboard.") }}
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
                <!-- Card 1 -->
                <div class="bg-gray-800 border border-gray-700 rounded-lg shadow-lg p-4">
                    <h4 class="text-lg font-semibold text-pink-400 mb-2">Quick Links</h4>
                    <ul class="text-gray-300">
                        <li><a href="#" class="hover:text-pink-500">Manage Branches</a></li>
                        <li><a href="#" class="hover:text-pink-500">View Employees</a></li>
                        <li><a href="#" class="hover:text-pink-500">Check Products</a></li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-800 border border-gray-700 rounded-lg shadow-lg p-4">
                    <h4 class="text-lg font-semibold text-pink-400 mb-2">Statistics</h4>
                    <p class="text-gray-300">Track your performance metrics here.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-gray-800 border border-gray-700 rounded-lg shadow-lg p-4">
                    <h4 class="text-lg font-semibold text-pink-400 mb-2">Recent Activities</h4>
                    <p class="text-gray-300">No recent activities yet.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
