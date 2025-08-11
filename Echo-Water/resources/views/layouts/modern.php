<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo function_exists('csrf_token') ? csrf_token() : 'csrf-placeholder'; ?>">
    <title><?= $title ?? 'EchoWater - Pure Innovation' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'water-blue': '#0284c7',
                        'water-light': '#7dd3fc',
                        'water-dark': '#0c4a6e',
                        'water-gradient-start': '#0ea5e9',
                        'water-gradient-end': '#0284c7',
                        'eco-green': '#059669',
                        'eco-light': '#34d399',
                        'dark': {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                            950: '#020617'
                        }
                    },
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'wave': 'wave 2s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s infinite',
                        'bounce-slow': 'bounce 2s infinite',
                        'ripple': 'ripple 2s ease-out infinite'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        },
                        wave: {
                            '0%, 100%': { transform: 'rotate(0deg)' },
                            '50%': { transform: 'rotate(3deg)' }
                        },
                        ripple: {
                            '0%': { transform: 'scale(1)', opacity: '1' },
                            '100%': { transform: 'scale(4)', opacity: '0' }
                        }
                    },
                    backgroundImage: {
                        'water-gradient': 'linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%)',
                        'hero-pattern': 'url("data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239ca3af" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E")'
                    }
                }
            }
        }
    </script>
    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .dark .glass-effect {
            background: rgba(15, 23, 42, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .water-ripple {
            position: relative;
            overflow: hidden;
        }
        .water-ripple::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            animation: ripple-sweep 2s infinite;
        }
        
        .dark .water-ripple::before {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
        }
        
        @keyframes ripple-sweep {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #0ea5e9, #0284c7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .dark .gradient-text {
            background: linear-gradient(135deg, #7dd3fc, #0ea5e9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .dark .card-hover:hover {
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        .floating-animation:nth-child(2) {
            animation-delay: -2s;
        }
        .floating-animation:nth-child(3) {
            animation-delay: -4s;
        }
        
        /* Theme transition */
        * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        .dark ::-webkit-scrollbar-track {
            background: #1e293b;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #475569;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        .dark ::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }
        
        /* Enhanced Dark Mode Coverage */
        .dark {
            color-scheme: dark;
        }
        
        /* Force background and text colors in dark mode */
        .dark body {
            background: linear-gradient(135deg, rgb(2, 6, 23) 0%, rgb(15, 23, 42) 50%, rgb(30, 41, 59) 100%) !important;
            color: rgb(243 244 246) !important;
        }
        
        /* Force dark mode for all sections */
        .dark section:not([class*="bg-gradient"]) {
            background-color: rgba(15, 23, 42, 0.95) !important;
            color: rgb(243 244 246) !important;
        }
        
        /* Force dark mode for navigation */
        .dark nav {
            background-color: rgba(15, 23, 42, 0.95) !important;
            backdrop-filter: blur(16px) !important;
        }
        
        /* Force dark mode for cards and containers */
        .dark .bg-white:not([class*="bg-gradient"]),
        .dark .card-hover:not([class*="bg-gradient"]) {
            background-color: rgb(30 41 59) !important;
            border-color: rgb(51 65 85) !important;
            color: rgb(243 244 246) !important;
        }
        
        /* Force text colors */
        .dark h1, .dark h2, .dark h3, .dark h4, .dark h5, .dark h6,
        .dark p, .dark span:not([class*="text-"]):not([class*="gradient"]),
        .dark div:not([class*="text-"]):not([class*="gradient"]) {
            color: rgb(243 244 246) !important;
        }
        
        /* Force footer dark mode */
        .dark footer {
            background: linear-gradient(135deg, rgb(15, 23, 42) 0%, rgb(30, 41, 59) 100%) !important;
            color: rgb(203 213 225) !important;
        }
        
        /* Grid dark mode */
        .dark .grid > div:not([class*="bg-gradient"]) {
            background-color: rgb(30 41 59) !important;
            border-color: rgb(51 65 85) !important;
        }
        
        /* Button Styles */
        .btn-primary {
            background-color: rgb(59 130 246) !important;
            color: white !important;
            padding: 0.5rem 1rem !important;
            border-radius: 0.375rem !important;
            font-weight: 600 !important;
            transition: all 0.2s !important;
            border: none !important;
            cursor: pointer !important;
            display: inline-block !important;
            text-decoration: none !important;
        }
        
        .btn-primary:hover {
            background-color: rgb(37 99 235) !important;
            transform: translateY(-1px) !important;
        }
        
        html.dark .btn-primary {
            background-color: rgb(59 130 246) !important;
            color: white !important;
        }
        
        html.dark .btn-primary:hover {
            background-color: rgb(37 99 235) !important;
        }

        /* Table Styles for Dark Mode */
        html.dark table {
            color: rgb(243 244 246) !important;
        }
        
        html.dark table th {
            color: rgb(243 244 246) !important;
            background-color: rgb(51 65 85) !important;
            border-color: rgb(75 85 99) !important;
        }
        
        html.dark table td {
            color: rgb(243 244 246) !important;
            border-color: rgb(75 85 99) !important;
        }
        
        html.dark .overflow-x-auto {
            background-color: rgb(30 41 59) !important;
        }
        
        /* Modal Styles */
        .modal-backdrop {
            backdrop-filter: blur(8px) !important;
        }
        
        html.dark .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.7) !important;
        }
        
        /* Form Input Styles for Dark Mode */
        html.dark input[type="text"],
        html.dark input[type="number"],
        html.dark input[type="email"],
        html.dark input[type="password"],
        html.dark textarea,
        html.dark select {
            background-color: rgb(55 65 81) !important;
            border-color: rgb(75 85 99) !important;
            color: rgb(243 244 246) !important;
        }
        
        html.dark input[type="text"]:focus,
        html.dark input[type="number"]:focus,
        html.dark input[type="email"]:focus,
        html.dark input[type="password"]:focus,
        html.dark textarea:focus,
        html.dark select:focus {
            border-color: rgb(59 130 246) !important;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3) !important;
        }
        
        /* Modal specific styling */
        html.dark .modal-content {
            background-color: rgb(31 41 55) !important;
            border: 1px solid rgb(75 85 99) !important;
        }
        
        /* Button dark mode (excluding gradients) */
        .dark button:not([class*="bg-gradient"]):not([class*="from-"]) {
            background-color: rgb(51 65 85) !important;
            color: rgb(243 244 246) !important;
        }
        
        /* Input dark mode */
        .dark input, .dark textarea, .dark select {
            background-color: rgb(30 41 59) !important;
            border-color: rgb(51 65 85) !important;
            color: rgb(243 244 246) !important;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-cyan-50 dark:from-dark-950 dark:via-dark-900 dark:to-dark-800 min-h-screen overflow-x-hidden text-gray-900 dark:text-gray-100 transition-colors duration-300">
    
    <!-- Theme Toggle Button -->
    <button id="theme-toggle" class="fixed top-24 right-6 z-50 w-12 h-12 bg-white dark:bg-dark-800 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center border border-gray-200 dark:border-dark-600 group">
        <i class="fas fa-sun text-lg text-yellow-500 group-hover:scale-110 transition-transform duration-300" id="theme-toggle-light-icon"></i>
        <i class="fas fa-moon text-lg text-blue-400 hidden group-hover:scale-110 transition-transform duration-300" id="theme-toggle-dark-icon"></i>
    </button>
    
    <!-- Floating Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="floating-animation absolute top-20 left-10 w-20 h-20 bg-water-light dark:bg-water-dark rounded-full opacity-20 dark:opacity-10 blur-xl"></div>
        <div class="floating-animation absolute top-40 right-20 w-32 h-32 bg-eco-light dark:bg-eco-green rounded-full opacity-15 dark:opacity-8 blur-2xl"></div>
        <div class="floating-animation absolute bottom-40 left-1/4 w-24 h-24 bg-water-blue dark:bg-water-light rounded-full opacity-10 dark:opacity-5 blur-xl"></div>
        <div class="floating-animation absolute bottom-20 right-1/3 w-16 h-16 bg-eco-green dark:bg-eco-light rounded-full opacity-25 dark:opacity-12 blur-xl"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 transition-all duration-300" x-data="{ scrolled: false, mobileOpen: false }" 
         x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 50)"
         :class="scrolled ? 'bg-white/95 dark:bg-dark-900/95 backdrop-blur-lg shadow-lg border-b border-gray-200/20 dark:border-dark-700/20' : 'bg-white/10 dark:bg-dark-900/10 backdrop-blur-sm'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 lg:h-20 items-center">
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-3 group">
                        <!-- EchoWater Logo SVG -->
                        <div class="relative">
                            <svg class="w-10 h-10 lg:w-12 lg:h-12 transform group-hover:scale-110 transition-transform duration-300" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="waterGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#0ea5e9;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#0284c7;stop-opacity:1" />
                                    </linearGradient>
                                    <linearGradient id="waterGradientDark" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#7dd3fc;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#0ea5e9;stop-opacity:1" />
                                    </linearGradient>
                                    <filter id="glow">
                                        <feGaussianBlur stdDeviation="3" result="coloredBlur"/>
                                        <feMerge> 
                                            <feMergeNode in="coloredBlur"/>
                                            <feMergeNode in="SourceGraphic"/>
                                        </feMerge>
                                    </filter>
                                </defs>
                                <circle cx="50" cy="50" r="45" fill="url(#waterGradient)" filter="url(#glow)" class="animate-pulse-slow dark:hidden"/>
                                <circle cx="50" cy="50" r="45" fill="url(#waterGradientDark)" filter="url(#glow)" class="animate-pulse-slow hidden dark:block"/>
                                <!-- Water Drop -->
                                <path d="M50 20 C40 35, 40 45, 50 55 C60 45, 60 35, 50 20 Z" fill="white" opacity="0.9"/>
                                <!-- Bubbles -->
                                <circle cx="35" cy="65" r="3" fill="white" opacity="0.7" class="animate-bounce-slow"/>
                                <circle cx="65" cy="70" r="2" fill="white" opacity="0.5" class="animate-bounce-slow" style="animation-delay: 0.5s"/>
                                <circle cx="55" cy="75" r="1.5" fill="white" opacity="0.6" class="animate-bounce-slow" style="animation-delay: 1s"/>
                            </svg>
                            <!-- Ripple Effect -->
                            <div class="absolute inset-0 rounded-full bg-water-blue dark:bg-water-light opacity-30 animate-ping"></div>
                        </div>
                        <div>
                            <span class="text-xl lg:text-2xl xl:text-3xl font-bold gradient-text">EchoWater</span>
                            <p class="text-xs text-gray-500 dark:text-gray-400 -mt-1 hidden lg:block">Pure Innovation</p>
                        </div>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                    <a href="/" class="nav-link text-gray-700 dark:text-gray-300 hover:text-water-blue dark:hover:text-water-light transition-all duration-300 relative group px-3 py-2 text-sm font-medium">
                        <i class="fas fa-home mr-2"></i>Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-water-blue to-eco-green transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/products" class="nav-link text-gray-700 dark:text-gray-300 hover:text-water-blue dark:hover:text-water-light transition-all duration-300 relative group px-3 py-2 text-sm font-medium">
                        <i class="fas fa-tint mr-2"></i>Products
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-water-blue to-eco-green transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    
                    <?php if(isset($_SESSION['user_id'])): ?>
                        <a href="/dashboard" class="nav-link text-gray-700 dark:text-gray-300 hover:text-water-blue dark:hover:text-water-light transition-all duration-300 relative group px-3 py-2 text-sm font-medium">
                            <i class="fas fa-chart-line mr-2"></i>Dashboard
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-water-blue to-eco-green transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
                            <a href="/admin" class="nav-link text-gray-700 dark:text-gray-300 hover:text-water-blue dark:hover:text-water-light transition-all duration-300 relative group px-3 py-2 text-sm font-medium">
                                <i class="fas fa-cog mr-2"></i>Admin
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-water-blue to-eco-green transition-all duration-300 group-hover:w-full"></span>
                            </a>
                        <?php endif; ?>
                        
                        <!-- User Profile and Logout -->
                        <div class="flex items-center space-x-3 ml-4 pl-4 border-l border-gray-200 dark:border-gray-600">
                            <div class="relative group">
                                <div class="w-8 h-8 bg-gradient-to-r from-water-blue to-eco-green rounded-full flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300">
                                    <i class="fas fa-user text-white text-xs"></i>
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-r from-water-blue to-eco-green rounded-full opacity-75 animate-pulse"></div>
                            </div>
                            <form method="POST" action="/logout" class="inline">
                                <input type="hidden" name="_token" value="<?php echo function_exists('csrf_token') ? csrf_token() : 'csrf-placeholder'; ?>">
                                <button type="submit" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 dark:from-red-600 dark:to-red-700 dark:hover:from-red-700 dark:hover:to-red-800 text-white px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 group">
                                    <i class="fas fa-sign-out-alt mr-2 group-hover:rotate-12 transition-transform duration-300"></i>Logout
                                </button>
                            </form>
                        </div>
                    <?php else: ?>
                        <div class="flex items-center space-x-3">
                            <a href="/login" class="text-gray-700 dark:text-gray-300 hover:text-water-blue dark:hover:text-water-light transition-all duration-300 px-4 py-2 rounded-lg hover:bg-water-light/20 dark:hover:bg-water-dark/20 text-sm font-medium">
                                <i class="fas fa-sign-in-alt mr-2"></i>Login
                            </a>
                            <a href="/register" class="bg-gradient-to-r from-water-blue to-water-dark dark:from-water-light dark:to-water-blue text-white px-4 py-2 rounded-full hover:from-water-dark hover:to-water-blue dark:hover:from-water-blue dark:hover:to-water-dark transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 group text-sm font-medium">
                                <i class="fas fa-user-plus mr-2 group-hover:scale-110 transition-transform duration-300"></i>Register
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center space-x-3">
                    <!-- Mobile Theme Toggle -->
                    <button id="mobile-theme-toggle" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-dark-700 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-dark-600 transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-110">
                        <i class="fas fa-sun text-lg" id="mobile-theme-toggle-light-icon"></i>
                        <i class="fas fa-moon text-lg hidden" id="mobile-theme-toggle-dark-icon"></i>
                    </button>
                    
                    <button @click="mobileOpen = !mobileOpen" class="text-gray-700 dark:text-gray-300 hover:text-water-blue dark:hover:text-water-light focus:outline-none p-2 rounded-lg hover:bg-water-light/20 dark:hover:bg-water-dark/20 transition-all duration-300">
                        <i class="fas fa-bars text-xl" x-show="!mobileOpen"></i>
                        <i class="fas fa-times text-xl" x-show="mobileOpen" x-cloak></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileOpen" 
             x-transition:enter="transition ease-out duration-300" 
             x-transition:enter-start="opacity-0 transform -translate-y-4" 
             x-transition:enter-end="opacity-100 transform translate-y-0" 
             x-transition:leave="transition ease-in duration-200" 
             x-transition:leave-start="opacity-100 transform translate-y-0" 
             x-transition:leave-end="opacity-0 transform -translate-y-4" 
             class="lg:hidden bg-white/95 dark:bg-dark-900/95 backdrop-blur-lg border-t border-gray-200/20 dark:border-dark-700/20 shadow-xl" x-cloak>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 space-y-3">
                <a href="/" class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:text-water-blue dark:hover:text-water-light hover:bg-water-light/10 dark:hover:bg-water-dark/10 rounded-lg transition-all duration-300">
                    <i class="fas fa-home mr-3 w-5"></i>Home
                </a>
                <a href="/products" class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:text-water-blue dark:hover:text-water-light hover:bg-water-light/10 dark:hover:bg-water-dark/10 rounded-lg transition-all duration-300">
                    <i class="fas fa-tint mr-3 w-5"></i>Products
                </a>
                
                <?php if(isset($_SESSION['user_id'])): ?>
                    <a href="/dashboard" class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:text-water-blue dark:hover:text-water-light hover:bg-water-light/10 dark:hover:bg-water-dark/10 rounded-lg transition-all duration-300">
                        <i class="fas fa-chart-line mr-3 w-5"></i>Dashboard
                    </a>
                    <?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
                        <a href="/admin" class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:text-water-blue dark:hover:text-water-light hover:bg-water-light/10 dark:hover:bg-water-dark/10 rounded-lg transition-all duration-300">
                            <i class="fas fa-cog mr-3 w-5"></i>Admin
                        </a>
                    <?php endif; ?>
                    
                    <div class="border-t border-gray-200 dark:border-gray-600 pt-3 mt-3">
                        <div class="flex items-center px-4 py-3 space-x-3">
                            <div class="w-8 h-8 bg-gradient-to-r from-water-blue to-eco-green rounded-full flex items-center justify-center shadow-lg">
                                <i class="fas fa-user text-white text-xs"></i>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300 font-medium"><?php echo isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : 'User'; ?></span>
                        </div>
                        <form method="POST" action="/logout" class="px-4">
                            <input type="hidden" name="_token" value="<?php echo function_exists('csrf_token') ? csrf_token() : 'csrf-placeholder'; ?>">
                            <button type="submit" class="w-full bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 dark:from-red-600 dark:to-red-700 dark:hover:from-red-700 dark:hover:to-red-800 text-white px-4 py-3 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl group text-left">
                                <i class="fas fa-sign-out-alt mr-3 group-hover:rotate-12 transition-transform duration-300"></i>Logout
                            </button>
                        </form>
                    </div>
                <?php else: ?>
                    <div class="border-t border-gray-200 dark:border-gray-600 pt-3 mt-3 space-y-3">
                        <a href="/login" class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:text-water-blue dark:hover:text-water-light hover:bg-water-light/10 dark:hover:bg-water-dark/10 rounded-lg transition-all duration-300">
                            <i class="fas fa-sign-in-alt mr-3 w-5"></i>Login
                        </a>
                        <a href="/register" class="block mx-4 bg-gradient-to-r from-water-blue to-water-dark dark:from-water-light dark:to-water-blue text-white px-4 py-3 rounded-lg hover:from-water-dark hover:to-water-blue dark:hover:from-water-blue dark:hover:to-water-dark transition-all duration-300 shadow-lg hover:shadow-xl text-center">
                            <i class="fas fa-user-plus mr-2"></i>Register
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="relative z-10 pt-20">
        <?= $content ?? '' ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-water-dark to-water-blue dark:from-dark-900 dark:to-dark-800 text-white dark:text-gray-300 mt-20">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <svg class="w-8 h-8" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="45" fill="white" opacity="0.9"/>
                            <path d="M50 20 C40 35, 40 45, 50 55 C60 45, 60 35, 50 20 Z" fill="#0284c7"/>
                        </svg>
                        <span class="text-xl font-bold">EchoWater</span>
                    </div>
                    <p class="text-blue-100 dark:text-gray-400">Pure innovation in water purification technology.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-4">Products</h3>
                    <ul class="space-y-2 text-blue-100 dark:text-gray-400">
                        <li><a href="#" class="hover:text-white dark:hover:text-white transition-colors">Water Filters</a></li>
                        <li><a href="#" class="hover:text-white dark:hover:text-white transition-colors">Purification Systems</a></li>
                        <li><a href="#" class="hover:text-white dark:hover:text-white transition-colors">Smart Monitoring</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-4">Support</h3>
                    <ul class="space-y-2 text-blue-100 dark:text-gray-400">
                        <li><a href="#" class="hover:text-white dark:hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="hover:text-white dark:hover:text-white transition-colors">Installation</a></li>
                        <li><a href="#" class="hover:text-white dark:hover:text-white transition-colors">Maintenance</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-4">Connect</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white/20 dark:bg-gray-700 rounded-full flex items-center justify-center hover:bg-white/30 dark:hover:bg-gray-600 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/20 dark:bg-gray-700 rounded-full flex items-center justify-center hover:bg-white/30 dark:hover:bg-gray-600 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/20 dark:bg-gray-700 rounded-full flex items-center justify-center hover:bg-white/30 dark:hover:bg-gray-600 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-white/20 dark:border-gray-700 mt-8 pt-8 text-center text-blue-100 dark:text-gray-400">
                <p>&copy; 2025 EchoWater. All rights reserved. | Pure water, pure innovation.</p>
            </div>
        </div>
    </footer>

    <!-- Initialize AOS and Theme Toggle -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Theme Toggle Functionality
        const themeToggle = document.getElementById('theme-toggle');
        const mobileThemeToggle = document.getElementById('mobile-theme-toggle');
        const lightIcon = document.getElementById('theme-toggle-light-icon');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');
        const mobileLightIcon = document.getElementById('mobile-theme-toggle-light-icon');
        const mobileDarkIcon = document.getElementById('mobile-theme-toggle-dark-icon');
        const html = document.documentElement;
        
        // Check for saved theme preference or default to light mode
        const currentTheme = localStorage.getItem('theme') || 
                           (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        
        function updateThemeIcons() {
            const isDark = html.classList.contains('dark');
            
            // Update desktop icons
            if (lightIcon && darkIcon) {
                if (isDark) {
                    lightIcon.classList.add('hidden');
                    darkIcon.classList.remove('hidden');
                } else {
                    lightIcon.classList.remove('hidden');
                    darkIcon.classList.add('hidden');
                }
            }
            
            // Update mobile icons
            if (mobileLightIcon && mobileDarkIcon) {
                if (isDark) {
                    mobileLightIcon.classList.add('hidden');
                    mobileDarkIcon.classList.remove('hidden');
                } else {
                    mobileLightIcon.classList.remove('hidden');
                    mobileDarkIcon.classList.add('hidden');
                }
            }
            
            // Force apply dark mode to all elements
            if (isDark) {
                applyDarkModeToAll();
            } else {
                removeDarkModeFromAll();
            }
        }
        
        function applyDarkModeToAll() {
            // Force dark mode on body and main containers
            document.body.style.backgroundColor = 'rgb(15 23 42)';
            document.body.style.color = 'rgb(243 244 246)';
            
            // Apply to all sections
            const sections = document.querySelectorAll('section');
            sections.forEach(section => {
                if (!section.classList.contains('bg-gradient-to-br') && !section.classList.contains('bg-gradient-to-r')) {
                    section.style.backgroundColor = 'rgba(15, 23, 42, 0.95)';
                    section.style.color = 'rgb(243 244 246)';
                }
            });
            
            // Apply to all cards and containers
            const cards = document.querySelectorAll('.bg-white, .card-hover, [class*="bg-gray"]');
            cards.forEach(card => {
                if (!card.classList.contains('bg-gradient-to-br') && !card.classList.contains('bg-gradient-to-r')) {
                    card.style.backgroundColor = 'rgb(30 41 59)';
                    card.style.borderColor = 'rgb(51 65 85)';
                    card.style.color = 'rgb(243 244 246)';
                }
            });
            
            // Apply to navigation
            const nav = document.querySelector('nav');
            if (nav) {
                nav.style.backgroundColor = 'rgba(15, 23, 42, 0.95)';
                nav.style.backdropFilter = 'blur(16px)';
            }
            
            // Apply to footer
            const footer = document.querySelector('footer');
            if (footer) {
                footer.style.background = 'linear-gradient(135deg, rgb(15, 23, 42) 0%, rgb(30, 41, 59) 100%)';
                footer.style.color = 'rgb(203 213 225)';
            }
        }
        
        function removeDarkModeFromAll() {
            // Reset body styles
            document.body.style.backgroundColor = '';
            document.body.style.color = '';
            
            // Reset all sections
            const sections = document.querySelectorAll('section');
            sections.forEach(section => {
                section.style.backgroundColor = '';
                section.style.color = '';
            });
            
            // Reset all cards and containers
            const cards = document.querySelectorAll('.bg-white, .card-hover, [class*="bg-gray"]');
            cards.forEach(card => {
                card.style.backgroundColor = '';
                card.style.borderColor = '';
                card.style.color = '';
            });
            
            // Reset navigation
            const nav = document.querySelector('nav');
            if (nav) {
                nav.style.backgroundColor = '';
                nav.style.backdropFilter = '';
            }
            
            // Reset footer
            const footer = document.querySelector('footer');
            if (footer) {
                footer.style.background = '';
                footer.style.color = '';
            }
        }
        
        if (currentTheme === 'dark') {
            html.classList.add('dark');
        }
        updateThemeIcons();

        function toggleTheme() {
            html.classList.toggle('dark');
            
            // Save theme preference
            const isDark = html.classList.contains('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            
            updateThemeIcons();
            
            // Add animation class
            if (themeToggle) {
                themeToggle.classList.add('animate-pulse');
                setTimeout(() => {
                    themeToggle.classList.remove('animate-pulse');
                }, 300);
            }
            
            if (mobileThemeToggle) {
                mobileThemeToggle.classList.add('animate-pulse');
                setTimeout(() => {
                    mobileThemeToggle.classList.remove('animate-pulse');
                }, 300);
            }
        }

        if (themeToggle) {
            themeToggle.addEventListener('click', toggleTheme);
        }
        
        if (mobileThemeToggle) {
            mobileThemeToggle.addEventListener('click', toggleTheme);
        }

        // Add smooth transitions when theme changes
        document.addEventListener('DOMContentLoaded', () => {
            // Add transition classes after page load to prevent FOUC
            setTimeout(() => {
                document.body.classList.add('transition-colors', 'duration-300');
                
                // Force update icons and apply theme
                updateThemeIcons();
                
                // Watch for dynamic content changes
                const observer = new MutationObserver((mutations) => {
                    if (html.classList.contains('dark')) {
                        mutations.forEach((mutation) => {
                            mutation.addedNodes.forEach((node) => {
                                if (node.nodeType === 1) { // Element node
                                    applyDarkModeToElement(node);
                                }
                            });
                        });
                    }
                });
                
                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            }, 100);
        });
        
        function applyDarkModeToElement(element) {
            if (element.classList.contains('bg-white') && !element.classList.contains('bg-gradient-to-br') && !element.classList.contains('bg-gradient-to-r')) {
                element.style.backgroundColor = 'rgb(30 41 59)';
                element.style.borderColor = 'rgb(51 65 85)';
                element.style.color = 'rgb(243 244 246)';
            }
            
            // Apply to child elements
            const children = element.querySelectorAll('.bg-white, [class*="text-gray"], [class*="bg-gray"]');
            children.forEach(child => {
                if (!child.classList.contains('bg-gradient-to-br') && !child.classList.contains('bg-gradient-to-r')) {
                    child.style.backgroundColor = 'rgb(30 41 59)';
                    child.style.color = 'rgb(243 244 246)';
                    child.style.borderColor = 'rgb(51 65 85)';
                }
            });
        }
    </script>
</body>
</html>
