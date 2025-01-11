<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniMarket Navbar</title>
    <style>
        /* Aurora Text Effect with Bright Colors */
        .aurora-text {
            background: linear-gradient(90deg, #ff4d6d, #ff6ec7, #7b5eff, #50cfff, #ff4d6d);
            background-size: 300% 300%;
            color: transparent;
            background-clip: text;
            -webkit-background-clip: text;
            animation: aurora 4s ease infinite;
        }

        @keyframes aurora {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Navbar Styling */
        .bg-gradient {
            background: linear-gradient(to right, #111827, #1f2937, #374151);
        }

        nav {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 0.375rem;
        }

        .nav-link {
            color: #ffffff; /* Set text to white */
        }

        /* Dropdown Styling */
        .dropdown-menu {
            position: absolute;
            right: 0;
            margin-top: 0.5rem;
            background-color: #374151;
            border-radius: 0.375rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 10;
        }

        .dropdown-menu a {
            display: block;
            color: #ffffff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 0.375rem;
        }

        .dropdown-menu a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="bg-gradient">

    <nav class="bg-gradient-to-r from-gray-800 to-gray-900 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="#" class="flex items-center space-x-2">
                        <!-- SVG Logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2l7 9-7 9-7-9 7-9z" />
                            <circle cx="12" cy="12" r="4" />
                        </svg>
                        <span class="text-2xl font-extrabold tracking-wide aurora-text">MiniMarket</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:flex sm:space-x-6 items-center">
                    <a href="/dashboard" class="nav-link px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                        <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                    </a>
                    <a href="/branches" class="nav-link px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                        <i class="fas fa-code-branch mr-2"></i> Branches
                    </a>
                    <a href="/employees" class="nav-link px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                        <i class="fas fa-users mr-2"></i> Employees
                    </a>
                    <a href="/products" class="nav-link px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                        <i class="fas fa-box mr-2"></i> Products
                    </a>
                    <a href="/transactions" class="nav-link px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                        <i class="fas fa-receipt mr-2"></i> Transactions
                    </a>

                    <!-- Settings Dropdown -->
                    <div class="relative dropdown">
                        <button class="nav-link px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                            <i class="fas fa-cog mr-2"></i> Settings
                        </button>
                        <div class="dropdown-menu">
                            <a href="/profile">Profile</a>
                            <a href="/settings">Account Settings</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                        </div>
                    </div>
                </div>

                <!-- Hamburger Menu -->
                <div class="flex items-center sm:hidden">
                    <button class="text-white p-2 rounded-md focus:outline-none hover:bg-gray-700 transition">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

</body>
</html>
