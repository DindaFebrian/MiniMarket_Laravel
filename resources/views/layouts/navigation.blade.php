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
    </style>
</head>
<body class="bg-gradient">

    <nav x-data="{ open: false }" class="bg-gradient-to-r from-gray-800 to-gray-900 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="#" class="flex items-center space-x-2">
                        <!-- SVG Logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <linearGradient id="gradient-logo" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#ff4d6d"/>
                                <stop offset="50%" stop-color="#ff6ec7"/>
                                <stop offset="100%" stop-color="#50cfff"/>
                            </linearGradient>
                            <path d="M12 2l7 9-7 9-7-9 7-9z" stroke="url(#gradient-logo)"/>
                            <circle cx="12" cy="12" r="4" fill="url(#gradient-logo)"/>
                        </svg>
                        <span class="text-2xl font-extrabold tracking-wide aurora-text">MiniMarket</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:flex sm:space-x-6 items-center">
                    <a href="#" class="nav-link px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                        <i class="fas fa-tachometer-alt mr-2"></i> <span class="text-white">Dashboard</span>
                    </a>
                    <a href="#" class="nav-link px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                        <i class="fas fa-code-branch mr-2"></i> Branches
                    </a>
                    <a href="#" class="nav-link px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                        <i class="fas fa-users mr-2"></i> Employees
                    </a>
                    <a href="#" class="nav-link px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                        <i class="fas fa-box mr-2"></i> Products
                    </a>
                    <a href="#" class="nav-link px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                        <i class="fas fa-receipt mr-2"></i> Transactions
                    </a>
                </div>

                <!-- Hamburger Menu -->
                <div class="flex items-center sm:hidden">
                    <button @click="open = !open" class="text-white p-2 rounded-md focus:outline-none hover:bg-gray-700 transition">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden bg-gradient-to-r from-gray-800 to-gray-900">
            <div class="space-y-1 py-2">
                <a href="#" class="nav-link block px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                    Dashboard
                </a>
                <a href="#" class="nav-link block px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                    Branches
                </a>
                <a href="#" class="nav-link block px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                    Employees
                </a>
                <a href="#" class="nav-link block px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                    Products
                </a>
                <a href="#" class="nav-link block px-4 py-2 hover:bg-gray-700 rounded-lg transition">
                    Transactions
                </a>
            </div>
        </div>
    </nav>

</body>
</html>
