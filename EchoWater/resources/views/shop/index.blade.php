@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section with Search -->
    <section class="relative bg-gradient-to-br from-white via-blue-50 to-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 slide-up">
                    Pure Water <span class="eco-gradient bg-clip-text text-transparent">Solutions</span>
                </h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-10 slide-up leading-relaxed" style="animation-delay: 0.2s;">
                    Discover our premium selection of clean, sustainable water products. 
                    From pure spring water to advanced filtration systems.
                </p>
                
                <!-- Search Bar -->
                <div class="max-w-2xl mx-auto slide-up" style="animation-delay: 0.4s;">
                    <div class="relative">
                        <input type="text" placeholder="Search for water products..." class="w-full px-6 py-4 pl-12 pr-16 text-lg border border-gray-200 rounded-2xl focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-100 transition-all duration-300 bg-white shadow-sm">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg"></i>
                        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 eco-gradient text-white px-6 py-2 rounded-xl font-medium hover:shadow-lg transition-all duration-200">
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-6 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-3 justify-center items-center">
                <span class="text-gray-600 font-medium mb-2 md:mb-0">Filter by:</span>
                <button class="filter-btn active eco-gradient text-white px-6 py-2 rounded-xl font-medium transition-all duration-200 shadow-sm" data-filter="all">
                    All Products
                </button>
                <button class="filter-btn bg-gray-50 text-gray-700 hover:bg-blue-50 hover:text-blue-600 px-6 py-2 rounded-xl font-medium transition-all duration-200" data-filter="machines">
                    Water Machines
                </button>
                <button class="filter-btn bg-gray-50 text-gray-700 hover:bg-blue-50 hover:text-blue-600 px-6 py-2 rounded-xl font-medium transition-all duration-200" data-filter="filters">
                    Filters
                </button>
                <button class="filter-btn bg-gray-50 text-gray-700 hover:bg-blue-50 hover:text-blue-600 px-6 py-2 rounded-xl font-medium transition-all duration-200" data-filter="accessories">
                    Accessories
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Product Hero -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-cyan-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Product Image -->
                <div class="animate-on-scroll">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-white rounded-3xl blur-xl opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                        <img src="{{ asset('EchoWaterMachine.jpg') }}" alt="EchoWater Machine" class="relative w-full h-96 object-cover rounded-3xl shadow-2xl group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold pulse-glow">
                            Featured
                        </div>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="text-white animate-on-scroll">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">
                        EchoWater <span class="text-cyan-200">Machine</span>
                    </h2>
                    <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                        Advanced water purification system that delivers crystal-clear, pure water 
                        for your home. Features cutting-edge filtration technology and smart monitoring.
                    </p>
                    
                    <!-- Features -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check-circle text-cyan-300 text-lg"></i>
                            <span class="text-blue-100">Advanced 7-stage filtration</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check-circle text-cyan-300 text-lg"></i>
                            <span class="text-blue-100">Smart monitoring system</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check-circle text-cyan-300 text-lg"></i>
                            <span class="text-blue-100">Energy-efficient design</span>
                        </div>
                    </div>

                    <div class="flex items-center space-x-6">
                        <span class="text-3xl font-bold">$899</span>
                        <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:shadow-xl transition-all duration-300 ripple group">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Add to Cart
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Our <span class="eco-gradient bg-clip-text text-transparent">Products</span>
                </h2>
                <p class="text-xl text-gray-600">Premium water solutions for every need</p>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="productsGrid">
                <!-- Product 1 - Water Machine -->
                <div class="product-card animate-on-scroll bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 scale-hover water-wave group" data-category="machines">
                    <div class="relative">
                        <div class="bg-gradient-to-br from-blue-50 to-cyan-100 p-6 h-64 flex items-center justify-center">
                            <img src="{{ asset('EchoWaterMachine.jpg') }}" alt="EchoWater Machine" class="w-full h-full object-cover rounded-lg group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="absolute top-4 right-4 bg-blue-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            Bestseller
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">EchoWater Machine Pro</h3>
                        <p class="text-gray-600 mb-4">Advanced purification system with IoT connectivity and smart monitoring.</p>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(4.9) 127 reviews</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold eco-gradient bg-clip-text text-transparent">$899</span>
                                <span class="text-gray-400 line-through ml-2">$1,199</span>
                            </div>
                            <button class="eco-gradient text-white px-6 py-2 rounded-full font-medium hover:shadow-lg transition-all duration-200 ripple group">
                                <i class="fas fa-cart-plus mr-1"></i>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 - Water Filter -->
                <div class="product-card animate-on-scroll bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 scale-hover water-wave group" data-category="filters" style="animation-delay: 0.1s;">
                    <div class="relative">
                        <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 h-64 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-emerald-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                <i class="fas fa-filter text-white text-4xl"></i>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4 bg-green-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            Eco-Friendly
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Premium Water Filter</h3>
                        <p class="text-gray-600 mb-4">High-performance filtration with 6-month lifespan and easy installation.</p>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(4.7) 89 reviews</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-green-600">$149</span>
                                <span class="text-gray-400 line-through ml-2">$199</span>
                            </div>
                            <button class="bg-green-500 text-white px-6 py-2 rounded-full font-medium hover:bg-green-600 hover:shadow-lg transition-all duration-200 ripple">
                                <i class="fas fa-cart-plus mr-1"></i>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 - Filtration System -->
                <div class="product-card animate-on-scroll bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 scale-hover water-wave group" data-category="filters" style="animation-delay: 0.2s;">
                    <div class="relative">
                        <div class="bg-gradient-to-br from-purple-50 to-violet-100 p-6 h-64 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-purple-400 to-indigo-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                <i class="fas fa-tint text-white text-4xl"></i>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4 bg-purple-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            Premium
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Under-Sink Filtration System</h3>
                        <p class="text-gray-600 mb-4">Compact under-sink system for clean, great-tasting water at home.</p>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(4.2) 56 reviews</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-purple-600">$299</span>
                                <span class="text-gray-400 line-through ml-2">$399</span>
                            </div>
                            <button class="bg-purple-500 text-white px-6 py-2 rounded-full font-medium hover:bg-purple-600 hover:shadow-lg transition-all duration-200 ripple">
                                <i class="fas fa-cart-plus mr-1"></i>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 - Water Bottle -->
                <div class="product-card animate-on-scroll bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 scale-hover water-wave group" data-category="accessories" style="animation-delay: 0.3s;">
                    <div class="relative">
                        <div class="bg-gradient-to-br from-cyan-50 to-blue-100 p-6 h-64 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-cyan-400 to-blue-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                <i class="fas fa-wine-bottle text-white text-4xl"></i>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4 bg-cyan-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            Portable
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Smart Water Bottle</h3>
                        <p class="text-gray-600 mb-4">Temperature-controlled bottle with hydration tracking and app integration.</p>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(4.8) 234 reviews</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-cyan-600">$79</span>
                                <span class="text-gray-400 line-through ml-2">$99</span>
                            </div>
                            <button class="bg-cyan-500 text-white px-6 py-2 rounded-full font-medium hover:bg-cyan-600 hover:shadow-lg transition-all duration-200 ripple">
                                <i class="fas fa-cart-plus mr-1"></i>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 5 - Replacement Parts -->
                <div class="product-card animate-on-scroll bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 scale-hover water-wave group" data-category="accessories" style="animation-delay: 0.4s;">
                    <div class="relative">
                        <div class="bg-gradient-to-br from-orange-50 to-red-100 p-6 h-64 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-orange-400 to-red-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                <i class="fas fa-cog text-white text-4xl"></i>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4 bg-orange-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            Essential
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Replacement Filter Kit</h3>
                        <p class="text-gray-600 mb-4">Complete replacement kit with 3 filters and installation tools.</p>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(4.6) 78 reviews</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-orange-600">$59</span>
                                <span class="text-gray-400 line-through ml-2">$79</span>
                            </div>
                            <button class="bg-orange-500 text-white px-6 py-2 rounded-full font-medium hover:bg-orange-600 hover:shadow-lg transition-all duration-200 ripple">
                                <i class="fas fa-cart-plus mr-1"></i>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 6 - Water Dispenser -->
                <div class="product-card animate-on-scroll bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 scale-hover water-wave group" data-category="machines" style="animation-delay: 0.5s;">
                    <div class="relative">
                        <div class="bg-gradient-to-br from-teal-50 to-green-100 p-6 h-64 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-teal-400 to-green-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                <i class="fas fa-glass-whiskey text-white text-4xl"></i>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4 bg-teal-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            Hot & Cold
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Water Dispenser Pro</h3>
                        <p class="text-gray-600 mb-4">Hot and cold water dispenser with child safety lock and energy saving mode.</p>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(4.3) 92 reviews</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-teal-600">$399</span>
                                <span class="text-gray-400 line-through ml-2">$499</span>
                            </div>
                            <button class="bg-teal-500 text-white px-6 py-2 rounded-full font-medium hover:bg-teal-600 hover:shadow-lg transition-all duration-200 ripple">
                                <i class="fas fa-cart-plus mr-1"></i>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-16">
                <button class="eco-gradient text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all duration-300 ripple">
                    <i class="fas fa-plus mr-2"></i>
                    Load More Products
                </button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose EchoWater?</h2>
                <p class="text-xl text-gray-600">Leading the way in sustainable water solutions</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center group animate-on-scroll">
                    <div class="w-20 h-20 eco-gradient rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 pulse-glow">
                        <i class="fas fa-award text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Premium Quality</h3>
                    <p class="text-gray-600 leading-relaxed">Sourced from the finest natural springs and filtered using advanced technology for superior taste and purity.</p>
                </div>

                <div class="text-center group animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 pulse-glow">
                        <i class="fas fa-leaf text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Eco-Friendly</h3>
                    <p class="text-gray-600 leading-relaxed">Sustainable packaging and environmentally conscious production methods for a greener future.</p>
                </div>

                <div class="text-center group animate-on-scroll" style="animation-delay: 0.4s;">
                    <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 pulse-glow">
                        <i class="fas fa-shipping-fast text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Fast Delivery</h3>
                    <p class="text-gray-600 leading-relaxed">Quick and reliable delivery to your doorstep with premium service and real-time tracking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 eco-gradient">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Stay Updated with EchoWater</h2>
            <p class="text-xl text-blue-100 mb-10">Get the latest updates on new products and exclusive offers</p>
            
            <div class="max-w-md mx-auto">
                <div class="flex gap-4">
                    <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-4 rounded-full text-gray-900 focus:outline-none focus:ring-4 focus:ring-white focus:ring-opacity-50">
                    <button class="bg-white text-blue-600 px-8 py-4 rounded-full font-bold hover:shadow-xl transition-all duration-300 ripple">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- JavaScript for Product Filtering -->
<script>
    // Product filtering
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const productCards = document.querySelectorAll('.product-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');
                
                // Update active button
                filterButtons.forEach(btn => {
                    btn.classList.remove('eco-gradient', 'text-white');
                    btn.classList.add('bg-gray-100', 'text-gray-700');
                });
                this.classList.remove('bg-gray-100', 'text-gray-700');
                this.classList.add('eco-gradient', 'text-white');

                // Filter products
                productCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        card.style.display = 'block';
                        card.classList.add('slide-up');
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Shopping cart animations
        const addToCartButtons = document.querySelectorAll('button:contains("Add to Cart")');
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Create floating cart icon animation
                const icon = document.createElement('i');
                icon.className = 'fas fa-shopping-cart';
                icon.style.position = 'fixed';
                icon.style.left = e.clientX + 'px';
                icon.style.top = e.clientY + 'px';
                icon.style.color = '#4facfe';
                icon.style.fontSize = '24px';
                icon.style.zIndex = '9999';
                icon.style.pointerEvents = 'none';
                icon.style.transition = 'all 1s ease-out';
                
                document.body.appendChild(icon);
                
                // Animate to top right corner
                setTimeout(() => {
                    icon.style.top = '20px';
                    icon.style.right = '20px';
                    icon.style.left = 'auto';
                    icon.style.opacity = '0';
                    icon.style.transform = 'scale(0.5)';
                }, 100);
                
                // Remove element after animation
                setTimeout(() => {
                    document.body.removeChild(icon);
                }, 1100);
                
                // Show success message
                this.innerHTML = '<i class="fas fa-check mr-1"></i>Added!';
                this.classList.remove('eco-gradient', 'bg-green-500', 'bg-purple-500', 'bg-cyan-500', 'bg-orange-500', 'bg-teal-500');
                this.classList.add('bg-green-500');
                
                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-cart-plus mr-1"></i>Add to Cart';
                    this.classList.remove('bg-green-500');
                    this.classList.add('eco-gradient');
                }, 2000);
            });
        });
    });
</script>
@endsection
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Energy efficient design</span>
                        </div>
                    </div>
                    <div class="mt-8">
                        <span class="text-3xl font-bold text-blue-600">$1,299</span>
                        <button class="ml-6 bg-blue-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-700 transition duration-150">
                            Learn More
                        </button>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-8">
                        <img src="{{ asset('EchoWaterMachine.jpg') }}" alt="EchoWater Machine" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 p-6">
                        <img src="{{ asset('EchoWater.jpg') }}" alt="Pure Spring Water" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Pure Spring Water</h3>
                        <p class="text-gray-600 mb-4">Naturally sourced spring water with perfect mineral balance for optimal hydration.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-600">$2.99</span>
                            <button class="bg-blue-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-blue-700 transition duration-150">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6">
                        <img src="{{ asset('EchoWaterLogo.jpg') }}" alt="EchoWater Brand" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">EchoWater Brand</h3>
                        <p class="text-gray-600 mb-4">Premium bottled water with our signature purification process and eco-friendly packaging.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-green-600">$4.99</span>
                            <button class="bg-green-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-green-700 transition duration-150">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="bg-gradient-to-br from-purple-50 to-violet-100 p-6">
                        <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-indigo-600 rounded-lg flex items-center justify-center">
                            <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Water Filtration System</h3>
                        <p class="text-gray-600 mb-4">Compact under-sink filtration system for clean, great-tasting water at home.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-purple-600">$299</span>
                            <button class="bg-purple-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-purple-700 transition duration-150">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose EchoWater?</h2>
                <p class="text-gray-600 text-lg">Leading the way in sustainable water solutions</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Premium Quality</h3>
                    <p class="text-gray-600">Sourced from the finest natural springs and filtered using advanced technology</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Eco-Friendly</h3>
                    <p class="text-gray-600">Sustainable packaging and environmentally conscious production methods</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Fast Delivery</h3>
                    <p class="text-gray-600">Quick and reliable delivery to your doorstep with premium service</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Experience Pure Water?</h2>
            <p class="text-blue-100 text-lg mb-8">Join thousands of satisfied customers who trust EchoWater for their water needs</p>
            <button class="bg-white text-blue-600 px-8 py-4 rounded-lg font-medium hover:bg-gray-50 transition duration-150">
                Start Shopping Now
            </button>
        </div>
    </div>
</div>
@endsection 