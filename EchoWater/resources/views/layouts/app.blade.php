<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EchoWater') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700&family=inter:400,500,600" rel="stylesheet" />
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        
        .eco-gradient {
            background: linear-gradient(135deg, #0ea5e9 0%, #06b6d4 50%, #0891b2 100%);
        }
        
        .eco-gradient-alt {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        
        .water-wave {
            position: relative;
            overflow: hidden;
            background: #ffffff;
        }
        
        .water-wave::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 200%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(14, 165, 233, 0.1), transparent);
            animation: wave 3s infinite;
        }
        
        @keyframes wave {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .pulse-glow {
            animation: pulse-glow 2s infinite;
        }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(14, 165, 233, 0.4); }
            50% { box-shadow: 0 0 40px rgba(14, 165, 233, 0.7); }
        }
        
        .slide-up {
            animation: slideUp 0.8s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .scale-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .scale-hover:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .ripple {
            position: relative;
            overflow: hidden;
        }
        
        .ripple::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .ripple:hover::after {
            width: 300px;
            height: 300px;
        }
        
        .navbar-blur {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .scroll-down .navbar-blur {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen">
    <!-- Animated Background -->
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-white to-blue-50"></div>
        <div class="absolute top-20 left-20 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-pulse"></div>
        <div class="absolute top-40 right-20 w-64 h-64 bg-cyan-100 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-pulse animation-delay-2000"></div>
        <div class="absolute bottom-20 left-1/2 w-64 h-64 bg-indigo-100 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-pulse animation-delay-4000"></div>
    </div>

    <!-- Header with Logo and Navigation -->
    <header class="relative z-20 w-full navbar-blur sticky top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Top Navigation Bar -->
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 rounded-full eco-gradient flex items-center justify-center pulse-glow">
                        <img src="{{ asset('EchoWaterLogo.jpg') }}" alt="EchoWater Logo" class="w-8 h-8 rounded-full object-cover">
                    </div>
                    <a href="{{ route('shop') }}" class="text-2xl font-bold eco-gradient bg-clip-text text-transparent hover:scale-105 transition-transform duration-300">
                        EchoWater
                    </a>
                </div>

                <!-- Navigation Menu -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('shop') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 relative group py-2">
                        Shop
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('feedback.index') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 relative group py-2">
                        Feedback
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 relative group py-2">
                        About
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </nav>

                <!-- Authentication Links -->
                <div class="flex items-center space-x-4">
                    @auth
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 eco-gradient rounded-full flex items-center justify-center">
                                <span class="text-white text-sm font-medium">{{ substr(auth()->user()->name, 0, 1) }}</span>
                            </div>
                            <span class="text-gray-600 text-sm hidden sm:block">{{ auth()->user()->name }}</span>
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors duration-200 ripple px-3 py-2 rounded-lg">
                                    <i class="fas fa-sign-out-alt mr-1"></i>Logout
                                </button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors duration-200 ripple px-4 py-2 rounded-lg">
                            <i class="fas fa-sign-in-alt mr-1"></i>Login
                        </a>
                        <a href="{{ route('signup') }}" class="eco-gradient text-white px-6 py-2 rounded-full text-sm font-medium hover:shadow-lg transition-all duration-200 ripple">
                            <i class="fas fa-user-plus mr-1"></i>Sign Up
                        </a>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-gray-600 hover:text-gray-900 focus:outline-none" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="md:hidden hidden glass-effect rounded-lg shadow-lg mt-2 p-4 space-y-3">
                <a href="{{ route('shop') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-200">Shop</a>
                <a href="{{ route('feedback.index') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-200">Feedback</a>
                <a href="#about" class="block text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-200">About</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="relative z-10 flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative z-10 bg-gradient-to-r from-slate-800 to-blue-900 text-white mt-20">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full eco-gradient flex items-center justify-center">
                            <img src="{{ asset('EchoWaterLogo.jpg') }}" alt="EchoWater Logo" class="w-6 h-6 rounded-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold">EchoWater</h3>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Clean water for a sustainable future. Premium quality water solutions for your home and business.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('shop') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Shop</a></li>
                        <li><a href="#about" class="text-gray-300 hover:text-white transition-colors duration-200">About Us</a></li>
                        <li><a href="{{ route('feedback.index') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Feedback</a></li>
                        <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors duration-200">Contact</a></li>
                    </ul>
                </div>

                <!-- Products -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Products</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Water Machines</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Filters</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Purification Systems</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Accessories</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-blue-400"></i>
                            <span class="text-gray-300">123 Water Street, Clean City</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-phone text-blue-400"></i>
                            <span class="text-gray-300">+1 (555) 123-4567</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <span class="text-gray-300">info@echowater.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} EchoWater. All rights reserved. Clean water for a sustainable future.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Interactions -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        // Scroll effect for navbar
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.classList.add('scroll-down');
            } else {
                header.classList.remove('scroll-down');
            }
        });

        // Add smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('slide-up');
                }
            });
        }, observerOptions);

        // Observe elements when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>