<nav x-data="{ open: false }" class="bg-gray-900 text-white shadow-lg">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-2">
                    <x-application-logo class="block h-9 w-auto fill-current text-orange-500" />
                    <span class="text-xl font-bold text-orange-500">Jayusman Store</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:flex">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                    <i class="fas fa-tachometer-alt mr-2"></i> {{ __('Dashboard') }}
                </x-nav-link>
                <x-nav-link :href="route('branches.index')" :active="request()->routeIs('branches.*')" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                    <i class="fas fa-code-branch mr-2"></i> {{ __('Branches') }}
                </x-nav-link>
                <x-nav-link :href="route('employees.index')" :active="request()->routeIs('employees.*')" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                    <i class="fas fa-users mr-2"></i> {{ __('Employees') }}
                </x-nav-link>
                <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.*')" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                    <i class="fas fa-box mr-2"></i> {{ __('Products') }}
                </x-nav-link>
                <x-nav-link :href="route('transactions.index')" :active="request()->routeIs('transactions.*')" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                    <i class="fas fa-receipt mr-2"></i> {{ __('Transactions') }}
                </x-nav-link>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center space-x-2 px-3 py-2 bg-orange-500 hover:bg-orange-600 rounded text-sm font-medium text-white transition">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Menu -->
            <div class="flex items-center sm:hidden">
                <button @click="open = !open" class="text-orange-500 p-2 rounded-md focus:outline-none focus:bg-orange-600">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden bg-gray-800">
        <div class="space-y-1 py-2">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('branches.index')" :active="request()->routeIs('branches.*')" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                {{ __('Branches') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('employees.index')" :active="request()->routeIs('employees.*')" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                {{ __('Employees') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('products.index')" :active="request()->routeIs('products.*')" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                {{ __('Products') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('transactions.index')" :active="request()->routeIs('transactions.*')" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                {{ __('Transactions') }}
            </x-responsive-nav-link>
        </div>

        <div class="border-t border-gray-700 py-2">
            <div class="px-4 text-white">
                <div class="font-medium">{{ Auth::user()->name }}</div>
                <div class="text-sm">{{ Auth::user()->email }}</div>
            </div>
            <div class="mt-2 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="hover:bg-orange-500 px-3 py-2 rounded transition">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>