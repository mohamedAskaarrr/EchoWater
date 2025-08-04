<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EchoWater - Premium water purification systems and solutions for a sustainable future">
    <title>EchoWater - Pure Water Solutions</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Premium Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Pro -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- GSAP for Advanced Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <!-- Custom Styles -->
    <style>
        :root {
            --primary: #0ea5e9;
            --primary-dark: #0284c7;
            --secondary: #06b6d4;
            --accent: #8b5cf6;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --dark: #0f172a;
            --light: #f8fafc;
            --glass: rgba(255, 255, 255, 0.08);
            --glass-border: rgba(255, 255, 255, 0.12);
            --shadow-soft: 0 4px 32px rgba(14, 165, 233, 0.08);
            --shadow-hard: 0 8px 40px rgba(0, 0, 0, 0.12);
            --gradient-primary: linear-gradient(135deg, #0ea5e9 0%, #06b6d4 50%, #8b5cf6 100%);
            --gradient-secondary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-success: linear-gradient(135deg, #10b981 0%, #059669 100%);
            --gradient-glass: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
        }
        
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            font-optical-sizing: auto;
            overflow-x: hidden;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
        }
        
        /* Premium Typography */
        .font-display {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 600;
            letter-spacing: -0.02em;
        }
        
        .font-body {
            font-family: 'Manrope', sans-serif;
            line-height: 1.7;
        }
        
        /* Advanced Gradients */
        .eco-gradient {
            background: var(--gradient-primary);
        }
        
        .gradient-text {
            background: var(--gradient-primary);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* Glass Morphism */
        .glass-card {
            background: var(--gradient-glass);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            box-shadow: var(--shadow-soft);
        }
        
        .glass-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Premium Animations */
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-glow {
            animation: glow 2s ease-in-out infinite alternate;
        }
        
        .animate-slide-up {
            animation: slideUp 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
            opacity: 0;
            transform: translateY(40px);
        }
        
        .animate-fade-in {
            animation: fadeIn 1.2s ease-out forwards;
            opacity: 0;
        }
        
        .animate-scale-in {
            animation: scaleIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            opacity: 0;
            transform: scale(0.8);
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes glow {
            from { box-shadow: 0 0 20px rgba(14, 165, 233, 0.3); }
            to { box-shadow: 0 0 30px rgba(139, 92, 246, 0.4); }
        }
        
        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeIn {
            to { opacity: 1; }
        }
        
        @keyframes scaleIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--gradient-primary);
            border-radius: 3px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--gradient-secondary);
        }
        
        /* Enhanced Buttons */
        .btn-premium {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transform-style: preserve-3d;
        }
        
        .btn-premium::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.6s ease;
        }
        
        .btn-premium:hover::before {
            left: 100%;
        }
        
        .btn-premium:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(14, 165, 233, 0.25);
        }
        
        /* Premium Input Fields */
        .input-premium {
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid rgba(14, 165, 233, 0.1);
            border-radius: 16px;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .input-premium:focus {
            background: rgba(255, 255, 255, 1);
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(14, 165, 233, 0.1);
            transform: translateY(-1px);
        }
        
        /* Card Hover Effects */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }
        
        /* Navigation Enhancements */
        .nav-link {
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        /* Particle Background */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }
        
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(14, 165, 233, 0.1);
            border-radius: 50%;
            animation: float 8s infinite ease-in-out;
        }
        
        /* Dark Mode Support */
        @media (prefers-color-scheme: dark) {
            :root {
                --light: #0f172a;
                --dark: #f8fafc;
            }
        }
        
        /* Responsive Design Enhancements */
        @media (max-width: 768px) {
            .animate-slide-up {
                animation-duration: 0.6s;
            }
            
            .btn-premium:hover {
                transform: none;
            }
        }
        
        /* Premium Focus States */
        *:focus {
            outline: none;
        }
        
        *:focus-visible {
            outline: 2px solid var(--primary);
            outline-offset: 2px;
        }
    </style>
    
    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'display': ['Space Grotesk', 'sans-serif'],
                        'body': ['Manrope', 'sans-serif'],
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'primary': '#0ea5e9',
                        'secondary': '#06b6d4',
                        'accent': '#8b5cf6',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'slide-up': 'slideUp 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards',
                        'fade-in': 'fadeIn 1.2s ease-out forwards',
                        'scale-in': 'scaleIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards',
                    },
                    backdropBlur: {
                        'xs': '2px',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gradient-to-br from-slate-50 to-blue-50">
    <!-- Particle Background -->
    <div class="particles" id="particles"></div>
    
    <!-- Navigation -->
    <nav class="fixed w-full top-0 z-50 glass-nav transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-xl eco-gradient p-0.5 shadow-lg">
                        <img src="{{ asset('EchoWaterLogo.jpg') }}" alt="EchoWater" class="w-full h-full rounded-lg object-cover">
                    </div>
                    <span class="font-display text-xl font-bold gradient-text">EchoWater</span>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('welcome') }}" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">Home</a>
                    <a href="{{ route('shop') }}" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">Shop</a>
                    <a href="#" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">About</a>
                    <a href="{{ route('feedback') }}" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">Feedback</a>
                    
                    @auth
                        <div class="flex items-center space-x-4">
                            <span class="text-gray-600">Welcome, {{ Auth::user()->name }}</span>
                            <a href="#" class="btn-premium eco-gradient text-white px-6 py-2 rounded-full font-medium text-sm">
                                Dashboard
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="text-gray-600 hover:text-red-600 transition-colors duration-200">
                                    <i class="fas fa-sign-out-alt"></i>
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">Login</a>
                            <a href="{{ route('signup') }}" class="btn-premium eco-gradient text-white px-6 py-2 rounded-full font-medium text-sm">
                                Get Started
                            </a>
                        </div>
                    @endauth
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 transition-colors duration-200">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white/95 backdrop-blur-lg border-t border-gray-100">
            <div class="px-4 py-6 space-y-4">
                <a href="{{ route('welcome') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-2">Home</a>
                <a href="{{ route('shop') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-2">Shop</a>
                <a href="#" class="block text-gray-700 hover:text-blue-600 font-medium py-2">About</a>
                <a href="{{ route('feedback') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-2">Feedback</a>
                
                @auth
                    <div class="pt-4 border-t border-gray-200">
                        <p class="text-gray-600 mb-2">Welcome, {{ Auth::user()->name }}</p>
                        <a href="#" class="block btn-premium eco-gradient text-white px-6 py-2 rounded-full font-medium text-sm text-center mb-2">
                            Dashboard
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left text-red-600 font-medium py-2">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <div class="pt-4 border-t border-gray-200 space-y-2">
                        <a href="{{ route('login') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-2">Login</a>
                        <a href="{{ route('signup') }}" class="block btn-premium eco-gradient text-white px-6 py-2 rounded-full font-medium text-sm text-center">
                            Get Started
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-slate-900 to-blue-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl eco-gradient p-0.5">
                            <img src="{{ asset('EchoWaterLogo.jpg') }}" alt="EchoWater" class="w-full h-full rounded-lg object-cover">
                        </div>
                        <span class="font-display text-xl font-bold">EchoWater</span>
                    </div>
                    <p class="text-blue-100 leading-relaxed">
                        Premium water purification systems for a sustainable future. Clean water, cleaner planet.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors duration-200">
                            <i class="fab fa-facebook text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors duration-200">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors duration-200">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors duration-200">
                            <i class="fab fa-linkedin text-sm"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('welcome') }}" class="text-blue-100 hover:text-white transition-colors duration-200">Home</a></li>
                        <li><a href="{{ route('shop') }}" class="text-blue-100 hover:text-white transition-colors duration-200">Products</a></li>
                        <li><a href="#" class="text-blue-100 hover:text-white transition-colors duration-200">About Us</a></li>
                        <li><a href="{{ route('feedback') }}" class="text-blue-100 hover:text-white transition-colors duration-200">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Products -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Products</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-blue-100 hover:text-white transition-colors duration-200">Water Machines</a></li>
                        <li><a href="#" class="text-blue-100 hover:text-white transition-colors duration-200">Filters</a></li>
                        <li><a href="#" class="text-blue-100 hover:text-white transition-colors duration-200">Accessories</a></li>
                        <li><a href="#" class="text-blue-100 hover:text-white transition-colors duration-200">Maintenance</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Contact Info</h3>
                    <div class="space-y-3 text-blue-100">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-blue-400"></i>
                            <span>123 Water Street, Pure City</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-phone text-blue-400"></i>
                            <span>+1 (555) 123-4567</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <span>info@echowater.com</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-blue-800 mt-12 pt-8 text-center">
                <p class="text-blue-100">
                    &copy; {{ date('Y') }} EchoWater. All rights reserved. | Designed with 💧 for a sustainable future.
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        
        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
        });
        
        // Particle Background
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 8 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 5) + 's';
                particlesContainer.appendChild(particle);
            }
        }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            
            // GSAP Animations
            if (typeof gsap !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);
                
                // Smooth scroll animations
                gsap.utils.toArray('.animate-slide-up').forEach((element) => {
                    gsap.fromTo(element, 
                        { opacity: 0, y: 40 },
                        { 
                            opacity: 1, 
                            y: 0, 
                            duration: 0.8,
                            ease: "power2.out",
                            scrollTrigger: {
                                trigger: element,
                                start: "top 80%",
                                end: "bottom 20%",
                                toggleActions: "play none none reverse"
                            }
                        }
                    );
                });
            }
        });
        
        // Enhanced interactions
        document.querySelectorAll('.btn-premium').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>
