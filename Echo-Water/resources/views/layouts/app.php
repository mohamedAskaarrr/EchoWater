<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'EchoWater - Premium Water Solutions'; ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Custom CSS -->
    <style>
        /* Custom aqua colors */
        :root {
            --aqua-50: #f0fdfa;
            --aqua-100: #ccfbf1;
            --aqua-200: #99f6e4;
            --aqua-300: #5eead4;
            --aqua-400: #2dd4bf;
            --aqua-500: #14b8a6;
            --aqua-600: #0d9488;
            --aqua-700: #0f766e;
            --aqua-800: #115e59;
            --aqua-900: #134e4a;
        }

        .card {
            @apply bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg border border-gray-100 dark:border-gray-700;
        }

        .btn-primary {
            @apply bg-gradient-to-r from-aqua-500 to-cyan-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300 hover:scale-105;
        }

        .glass-morphism {
            @apply bg-white/20 dark:bg-gray-800/20 backdrop-blur-sm border border-white/30 dark:border-gray-700/30;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Custom Tailwind colors */
        .text-aqua-600 { color: var(--aqua-600); }
        .text-aqua-400 { color: var(--aqua-400); }
        .bg-aqua-50 { background-color: var(--aqua-50); }
        .bg-aqua-600 { background-color: var(--aqua-600); }
        .bg-aqua-500 { background-color: var(--aqua-500); }
    </style>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm border-b border-gray-200 dark:border-gray-700 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold bg-gradient-to-r from-aqua-600 to-cyan-600 bg-clip-text text-transparent">
                        EchoWater
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/home" class="text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400 transition-colors">Home</a>
                    <a href="/products" class="text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400 transition-colors">Products</a>
                    
                    <?php if (isset($_SESSION['user_id']) || (function_exists('auth') && auth()->check())): ?>
                        <a href="/dashboard" class="text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400 transition-colors">Dashboard</a>
                        
                        <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
                            <a href="/admin" class="text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400 transition-colors">Admin</a>
                        <?php endif; ?>
                        
                        <form method="POST" action="/logout" class="inline">
                            <input type="hidden" name="_token" value="<?php echo function_exists('csrf_token') ? csrf_token() : 'csrf-placeholder'; ?>">
                            <button type="submit" class="text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400 transition-colors">Logout</button>
                        </form>
                    <?php else: ?>
                        <a href="/login" class="text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400 transition-colors">Login</a>
                        <a href="/register" class="btn-primary">Register</a>
                    <?php endif; ?>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-700 dark:text-gray-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
            <div class="px-4 py-2 space-y-1">
                <a href="/home" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400">Home</a>
                <a href="/products" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400">Products</a>
                
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="/dashboard" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400">Dashboard</a>
                    
                    <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
                        <a href="/admin" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400">Admin</a>
                    <?php endif; ?>
                    
                    <form method="POST" action="/logout" class="block px-3 py-2">
                        <input type="hidden" name="_token" value="<?php echo function_exists('csrf_token') ? csrf_token() : 'csrf-placeholder'; ?>">
                        <button type="submit" class="text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400">Logout</button>
                    </form>
                <?php else: ?>
                    <a href="/login" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400">Login</a>
                    <a href="/register" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-aqua-600 dark:hover:text-aqua-400">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        <?php echo $content; ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold bg-gradient-to-r from-aqua-400 to-cyan-400 bg-clip-text text-transparent mb-4">
                        EchoWater
                    </h3>
                    <p class="text-gray-400">Premium water purification solutions for a healthier future.</p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Products</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/products" class="hover:text-aqua-400 transition-colors">Under-sink Systems</a></li>
                        <li><a href="/products" class="hover:text-aqua-400 transition-colors">Countertop Purifiers</a></li>
                        <li><a href="/products" class="hover:text-aqua-400 transition-colors">Whole-house Solutions</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-aqua-400 transition-colors">Help Center</a></li>
                        <li><a href="#" class="hover:text-aqua-400 transition-colors">Installation Guide</a></li>
                        <li><a href="#" class="hover:text-aqua-400 transition-colors">Maintenance</a></li>
                        <li><a href="#" class="hover:text-aqua-400 transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-aqua-400 transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-aqua-400 transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-aqua-400 transition-colors">News</a></li>
                        <li><a href="#" class="hover:text-aqua-400 transition-colors">Investors</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 EchoWater. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Dashboard functionality
        if (typeof Alpine !== 'undefined') {
            document.addEventListener('alpine:init', () => {
                Alpine.data('dashboard', () => ({
                    init() {
                        console.log('Dashboard initialized');
                    }
                }));

                Alpine.data('productCatalog', () => ({
                    filters: {
                        search: '',
                        category: '',
                        rating: ''
                    },
                    init() {
                        console.log('Product catalog initialized');
                    },
                    applyFilters() {
                        console.log('Applying filters:', this.filters);
                    }
                }));
            });
        }
    </script>
</body>
</html>
