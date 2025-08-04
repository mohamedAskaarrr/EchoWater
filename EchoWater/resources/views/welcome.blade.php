@extends('layouts.premium-app')

@section('content')
<!-- Hero Section with Advanced Animations -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Dynamic Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-white via-blue-50/80 to-cyan-100/60"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(14,165,233,0.1),transparent_50%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_20%,rgba(139,92,246,0.08),transparent_50%)]"></div>
    </div>
    
    <!-- Floating Water Droplets -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-20 h-20 bg-gradient-to-br from-blue-400/20 to-cyan-400/20 rounded-full animate-float blur-sm"></div>
        <div class="absolute top-1/3 right-1/4 w-12 h-12 bg-gradient-to-br from-purple-400/20 to-blue-400/20 rounded-full animate-float blur-sm" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-1/3 left-1/3 w-16 h-16 bg-gradient-to-br from-cyan-400/20 to-blue-400/20 rounded-full animate-float blur-sm" style="animation-delay: 4s;"></div>
        <div class="absolute top-1/2 right-1/3 w-8 h-8 bg-gradient-to-br from-blue-400/30 to-purple-400/30 rounded-full animate-float blur-sm" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-1/4 right-1/2 w-14 h-14 bg-gradient-to-br from-cyan-400/25 to-blue-400/25 rounded-full animate-float blur-sm" style="animation-delay: 3s;"></div>
    </div>

    <!-- Main Content -->
    <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
        <!-- Premium Logo with Glow Effect -->
        <div class="mb-12 animate-scale-in">
            <div class="relative mx-auto w-32 h-32 mb-6">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full animate-glow opacity-75"></div>
                <div class="relative w-full h-full bg-white rounded-full p-2 shadow-2xl">
                    <img src="{{ asset('EchoWaterLogo.jpg') }}" alt="EchoWater Logo" class="w-full h-full rounded-full object-cover">
                </div>
            </div>
        </div>

        <!-- Hero Title with Stunning Typography -->
        <div class="space-y-6 mb-12">
            <h1 class="animate-slide-up font-display text-5xl md:text-7xl lg:text-8xl font-bold leading-tight">
                <span class="block text-gray-900 mb-4">Pure Water,</span>
                <span class="block gradient-text bg-gradient-to-r from-blue-600 via-cyan-500 to-purple-600 bg-clip-text text-transparent">
                    Pure Life
                </span>
            </h1>
            
            <p class="animate-slide-up font-body text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed" style="animation-delay: 0.2s;">
                Experience the future of water purification with <strong>EchoWater</strong> – where cutting-edge technology meets environmental consciousness to deliver the purest water solutions for your home and business.
            </p>
        </div>

        <!-- Premium CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16 animate-slide-up" style="animation-delay: 0.4s;">
            @auth
                <a href="{{ route('shop') }}" class="group btn-premium eco-gradient text-white px-10 py-4 rounded-2xl font-semibold text-lg shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105">
                    <i class="fas fa-shopping-cart mr-3 group-hover:animate-bounce"></i>
                    Explore Products
                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            @else
                <a href="{{ route('signup') }}" class="group btn-premium eco-gradient text-white px-10 py-4 rounded-2xl font-semibold text-lg shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105">
                    <i class="fas fa-rocket mr-3 group-hover:animate-bounce"></i>
                    Start Your Journey
                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
                <a href="{{ route('login') }}" class="group bg-white/80 backdrop-blur-sm text-blue-600 border-2 border-blue-200 px-10 py-4 rounded-2xl font-semibold text-lg hover:bg-white hover:border-blue-300 hover:shadow-xl transition-all duration-500 transform hover:scale-105">
                    <i class="fas fa-sign-in-alt mr-3"></i>
                    Sign In
                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            @endauth
        </div>

        <!-- Scroll Indicator -->
        <div class="animate-bounce">
            <div class="w-6 h-10 border-2 border-blue-400 rounded-full mx-auto relative">
                <div class="w-1 h-3 bg-blue-400 rounded-full mx-auto mt-2 animate-pulse"></div>
            </div>
            <p class="text-sm text-gray-500 mt-2">Scroll to explore</p>
        </div>
    </div>
</section>

<!-- Features Section with Advanced Card Design -->
<section class="py-24 bg-gradient-to-br from-white to-blue-50/50">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-20 animate-slide-up">
            <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Why Choose <span class="gradient-text">EchoWater?</span>
            </h2>
            <p class="font-body text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Revolutionary water technology backed by years of research and innovation
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 - Premium Quality -->
            <div class="group card-hover bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100">
                <div class="relative mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-award text-white text-2xl"></i>
                    </div>
                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full animate-pulse"></div>
                </div>
                <h3 class="font-display text-2xl font-bold text-gray-900 mb-4 text-center">Premium Quality</h3>
                <p class="font-body text-gray-600 leading-relaxed text-center">
                    Sourced from pristine natural springs and purified using NASA-grade filtration technology for unmatched purity and taste.
                </p>
                <div class="mt-6 flex justify-center">
                    <span class="inline-flex items-center bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                        <i class="fas fa-star mr-1"></i>
                        99.9% Pure
                    </span>
                </div>
            </div>

            <!-- Feature 2 - Eco-Friendly -->
            <div class="group card-hover bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100">
                <div class="relative mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-leaf text-white text-2xl"></i>
                    </div>
                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r from-green-500 to-teal-500 rounded-full animate-pulse"></div>
                </div>
                <h3 class="font-display text-2xl font-bold text-gray-900 mb-4 text-center">Eco-Friendly</h3>
                <p class="font-body text-gray-600 leading-relaxed text-center">
                    100% sustainable packaging made from recycled materials and carbon-neutral production processes for a greener planet.
                </p>
                <div class="mt-6 flex justify-center">
                    <span class="inline-flex items-center bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                        <i class="fas fa-recycle mr-1"></i>
                        Carbon Neutral
                    </span>
                </div>
            </div>

            <!-- Feature 3 - Smart Technology -->
            <div class="group card-hover bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100">
                <div class="relative mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-microchip text-white text-2xl"></i>
                    </div>
                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r from-purple-500 to-blue-500 rounded-full animate-pulse"></div>
                </div>
                <h3 class="font-display text-2xl font-bold text-gray-900 mb-4 text-center">Smart Technology</h3>
                <p class="font-body text-gray-600 leading-relaxed text-center">
                    AI-powered monitoring systems with IoT connectivity, real-time quality tracking, and predictive maintenance alerts.
                </p>
                <div class="mt-6 flex justify-center">
                    <span class="inline-flex items-center bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">
                        <i class="fas fa-wifi mr-1"></i>
                        IoT Enabled
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Showcase with Premium Design -->
<section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-20 animate-slide-up">
            <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Flagship <span class="gradient-text">Product</span>
            </h2>
            <p class="font-body text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Meet the EchoWater Machine – the pinnacle of water purification technology
            </p>
        </div>

        <!-- Product Display -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Product Image -->
            <div class="order-2 lg:order-1 animate-slide-up">
                <div class="relative group">
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-400 to-purple-500 rounded-3xl opacity-20 group-hover:opacity-30 transition-opacity duration-500 blur-lg"></div>
                    <div class="relative bg-white rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('EchoWaterMachine.jpg') }}" alt="EchoWater Machine" class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Floating Info Cards -->
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-2xl px-4 py-2 shadow-lg">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-gray-700">Active</span>
                            </div>
                        </div>
                        
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-2xl px-4 py-2 shadow-lg">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-tint text-blue-500"></i>
                                <span class="text-sm font-semibold text-gray-700">99.9% Pure</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="order-1 lg:order-2 space-y-8 animate-slide-up" style="animation-delay: 0.2s;">
                <div>
                    <h3 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        EchoWater <span class="gradient-text">Machine</span>
                    </h3>
                    <p class="font-body text-xl text-gray-600 leading-relaxed">
                        Revolutionary 7-stage purification system that transforms ordinary water into pristine, mineral-enriched hydration. 
                        Experience water the way nature intended.
                    </p>
                </div>
                
                <!-- Premium Features List -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-4 group">
                        <div class="flex-shrink-0 w-8 h-8 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-check text-white text-sm"></i>
                        </div>
                        <span class="font-body text-gray-700 text-lg">Advanced 7-stage filtration with UV sterilization</span>
                    </div>
                    <div class="flex items-center space-x-4 group">
                        <div class="flex-shrink-0 w-8 h-8 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-check text-white text-sm"></i>
                        </div>
                        <span class="font-body text-gray-700 text-lg">Smart IoT monitoring with mobile app control</span>
                    </div>
                    <div class="flex items-center space-x-4 group">
                        <div class="flex-shrink-0 w-8 h-8 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-check text-white text-sm"></i>
                        </div>
                        <span class="font-body text-gray-700 text-lg">Energy-efficient design with eco-mode operation</span>
                    </div>
                    <div class="flex items-center space-x-4 group">
                        <div class="flex-shrink-0 w-8 h-8 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-check text-white text-sm"></i>
                        </div>
                        <span class="font-body text-gray-700 text-lg">3-year warranty with 24/7 customer support</span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('shop') }}" class="group btn-premium eco-gradient text-white px-8 py-4 rounded-2xl font-semibold text-lg shadow-lg hover:shadow-xl transition-all duration-500">
                        <i class="fas fa-eye mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                        View Details
                    </a>
                    <button class="group bg-white text-blue-600 border-2 border-blue-200 px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-blue-50 hover:border-blue-300 transition-all duration-500">
                        <i class="fas fa-play mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                        Watch Demo
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section with Animated Counters -->
<section class="py-20 bg-gradient-to-r from-blue-600 via-cyan-600 to-purple-600 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
            <div class="animate-scale-in">
                <div class="text-4xl md:text-5xl font-bold mb-3 font-display">10,000+</div>
                <p class="text-blue-100 text-lg font-medium">Happy Customers</p>
                <div class="w-12 h-1 bg-white/50 mx-auto mt-2 rounded-full"></div>
            </div>
            <div class="animate-scale-in" style="animation-delay: 0.1s;">
                <div class="text-4xl md:text-5xl font-bold mb-3 font-display">150+</div>
                <p class="text-blue-100 text-lg font-medium">Premium Products</p>
                <div class="w-12 h-1 bg-white/50 mx-auto mt-2 rounded-full"></div>
            </div>
            <div class="animate-scale-in" style="animation-delay: 0.2s;">
                <div class="text-4xl md:text-5xl font-bold mb-3 font-display">50+</div>
                <p class="text-blue-100 text-lg font-medium">Cities Worldwide</p>
                <div class="w-12 h-1 bg-white/50 mx-auto mt-2 rounded-full"></div>
            </div>
            <div class="animate-scale-in" style="animation-delay: 0.3s;">
                <div class="text-4xl md:text-5xl font-bold mb-3 font-display">99.9%</div>
                <p class="text-blue-100 text-lg font-medium">Purity Guaranteed</p>
                <div class="w-12 h-1 bg-white/50 mx-auto mt-2 rounded-full"></div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-24 bg-gradient-to-br from-indigo-900 via-blue-900 to-cyan-900 relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/10 rounded-full animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-purple-500/10 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="relative max-w-5xl mx-auto px-6 text-center">
        <div class="animate-slide-up">
            <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-8 leading-tight">
                Ready to Transform Your<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400">Water Experience?</span>
            </h2>
            <p class="font-body text-xl md:text-2xl text-blue-100 mb-12 max-w-3xl mx-auto leading-relaxed">
                Join thousands of satisfied customers who've made the switch to pure, sustainable water solutions. Your journey to better health starts here.
            </p>
            
            @auth
                <a href="{{ route('shop') }}" class="group inline-flex items-center bg-white text-blue-900 px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:scale-105">
                    <i class="fas fa-shopping-bag mr-4 group-hover:animate-bounce"></i>
                    Explore Our Products
                    <i class="fas fa-arrow-right ml-4 group-hover:translate-x-2 transition-transform duration-300"></i>
                </a>
            @else
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="{{ route('signup') }}" class="group inline-flex items-center bg-white text-blue-900 px-12 py-5 rounded-2xl font-bold text-xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:scale-105">
                        <i class="fas fa-user-plus mr-4 group-hover:animate-bounce"></i>
                        Create Account
                        <i class="fas fa-arrow-right ml-4 group-hover:translate-x-2 transition-transform duration-300"></i>
                    </a>
                    <a href="{{ route('login') }}" class="group inline-flex items-center bg-transparent text-white border-2 border-white/50 px-12 py-5 rounded-2xl font-bold text-xl hover:bg-white/10 hover:border-white transition-all duration-500">
                        <i class="fas fa-sign-in-alt mr-4"></i>
                        Sign In
                        <i class="fas fa-arrow-right ml-4 group-hover:translate-x-2 transition-transform duration-300"></i>
                    </a>
                </div>
            @endauth
        </div>
    </div>
</section>
@endsection