@extends('layouts.premium-app')

@section('content')
<!-- Hero Section with Dynamic Search -->
<section class="relative bg-gradient-to-br from-white via-blue-50/30 to-purple-50/20 py-20">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_80%,rgba(14,165,233,0.05),transparent_50%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_20%,rgba(139,92,246,0.05),transparent_50%)]"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="font-display text-5xl md:text-6xl font-bold text-gray-900 mb-6 animate-slide-up">
                Premium Water <span class="gradient-text">Solutions</span>
            </h1>
            <p class="font-body text-xl text-gray-600 max-w-4xl mx-auto mb-12 leading-relaxed animate-slide-up" style="animation-delay: 0.2s;">
                Discover our curated collection of cutting-edge water purification technology. 
                From compact home systems to industrial-grade solutions.
            </p>
            
            <!-- Advanced Search Bar -->
            <div class="max-w-3xl mx-auto animate-slide-up" style="animation-delay: 0.4s;">
                <div class="relative group">
                    <div class="absolute -inset-2 bg-gradient-to-r from-blue-400 to-purple-500 rounded-3xl opacity-20 group-hover:opacity-30 transition-opacity duration-500 blur-lg"></div>
                    <div class="relative bg-white rounded-2xl shadow-xl border border-gray-100">
                        <div class="flex items-center">
                            <div class="flex-1 relative">
                                <input type="text" 
                                       placeholder="Search for water purifiers, filters, accessories..." 
                                       class="w-full px-6 py-5 pl-14 pr-4 text-lg border-0 rounded-2xl focus:outline-none focus:ring-0 bg-transparent font-medium text-gray-700 placeholder-gray-400">
                                <i class="fas fa-search absolute left-5 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg"></i>
                            </div>
                            <div class="flex items-center space-x-2 px-2">
                                <button class="p-3 text-gray-400 hover:text-blue-600 transition-colors duration-200 rounded-xl hover:bg-blue-50">
                                    <i class="fas fa-filter"></i>
                                </button>
                                <button class="btn-premium eco-gradient text-white px-8 py-3 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transition-all duration-300">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Filter Section -->
<section class="py-8 bg-white/80 backdrop-blur-sm border-b border-gray-100 sticky top-16 z-40">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-wrap gap-4 justify-center items-center">
            <span class="font-semibold text-gray-700">Filter by Category:</span>
            
            <!-- Filter Buttons -->
            <button class="filter-btn active btn-premium eco-gradient text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-sm" data-filter="all">
                <i class="fas fa-th-large mr-2"></i>
                All Products
            </button>
            <button class="filter-btn bg-gray-50 text-gray-700 hover:bg-blue-50 hover:text-blue-600 px-6 py-3 rounded-xl font-semibold transition-all duration-300" data-filter="machines">
                <i class="fas fa-cogs mr-2"></i>
                Machines
            </button>
            <button class="filter-btn bg-gray-50 text-gray-700 hover:bg-blue-50 hover:text-blue-600 px-6 py-3 rounded-xl font-semibold transition-all duration-300" data-filter="filters">
                <i class="fas fa-filter mr-2"></i>
                Filters
            </button>
            <button class="filter-btn bg-gray-50 text-gray-700 hover:bg-blue-50 hover:text-blue-600 px-6 py-3 rounded-xl font-semibold transition-all duration-300" data-filter="accessories">
                <i class="fas fa-plus-circle mr-2"></i>
                Accessories
            </button>
        </div>
    </div>
</section>

<!-- Products Grid Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-blue-50/30">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Sort and View Options -->
        <div class="flex justify-between items-center mb-12">
            <div>
                <h2 class="font-display text-2xl font-bold text-gray-900">Our Products</h2>
                <p class="text-gray-600 mt-1">Showing 24 of 156 products</p>
            </div>
            
            <div class="flex items-center space-x-4">
                <!-- Sort Dropdown -->
                <div class="relative">
                    <select class="appearance-none bg-white border border-gray-200 rounded-xl px-4 py-3 pr-8 focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 cursor-pointer">
                        <option>Sort by: Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest First</option>
                        <option>Best Rated</option>
                    </select>
                    <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                </div>
                
                <!-- View Toggle -->
                <div class="flex bg-gray-100 rounded-xl p-1">
                    <button class="p-2 rounded-lg bg-white shadow-sm text-blue-600">
                        <i class="fas fa-th-large"></i>
                    </button>
                    <button class="p-2 rounded-lg text-gray-400 hover:text-gray-600">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="products-grid">
            
            <!-- Product Card 1 - Featured -->
            <div class="product-card machines group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                <div class="relative overflow-hidden">
                    <div class="absolute top-4 left-4 z-10">
                        <span class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Featured
                        </span>
                    </div>
                    <div class="absolute top-4 right-4 z-10">
                        <button class="w-10 h-10 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-600 hover:text-red-500 transition-colors duration-200 group-hover:bg-white">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <img src="{{ asset('images/EchoWaterMachine.jpg') }}" alt="EchoWater Pro" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-blue-600 font-semibold bg-blue-50 px-2 py-1 rounded-lg">Water Machine</span>
                        <div class="flex items-center space-x-1">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(128)</span>
                        </div>
                    </div>
                    
                    <h3 class="font-display text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                        EchoWater Pro Max
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        Premium 7-stage filtration system with smart IoT monitoring and UV sterilization technology.
                    </p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <span class="text-2xl font-bold text-gray-900">35,000 EGP</span>
                            <span class="text-lg text-gray-400 line-through">46,000 EGP</span>
                        </div>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded-lg text-sm font-semibold">25% OFF</span>
                    </div>
                    
                    <div class="space-y-3">
                        <button class="w-full btn-premium eco-gradient text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300 transform hover:scale-[1.02]">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Add to Cart
                        </button>
                        <button class="w-full bg-gray-100 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-200 transition-colors duration-200">
                            <i class="fas fa-eye mr-2"></i>
                            Quick View
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card filters group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                <div class="relative overflow-hidden">
                    <div class="absolute top-4 right-4 z-10">
                        <button class="w-10 h-10 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-600 hover:text-red-500 transition-colors duration-200 group-hover:bg-white">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-blue-100 to-cyan-100 flex items-center justify-center">
                        <div class="text-6xl text-blue-400">
                            <i class="fas fa-filter"></i>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-green-600 font-semibold bg-green-50 px-2 py-1 rounded-lg">Filter System</span>
                        <div class="flex items-center space-x-1">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(89)</span>
                        </div>
                    </div>
                    
                    <h3 class="font-display text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                        Ultra Carbon Filter
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        Advanced activated carbon filter with 6-month lifespan. Removes 99.9% of contaminants.
                    </p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <span class="text-2xl font-bold text-gray-900">5,500 EGP</span>
                        </div>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-lg text-sm font-semibold">Best Seller</span>
                    </div>
                    
                    <div class="space-y-3">
                        <button class="w-full btn-premium eco-gradient text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300 transform hover:scale-[1.02]">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Add to Cart
                        </button>
                        <button class="w-full bg-gray-100 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-200 transition-colors duration-200">
                            <i class="fas fa-eye mr-2"></i>
                            Quick View
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card accessories group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                <div class="relative overflow-hidden">
                    <div class="absolute top-4 left-4 z-10">
                        <span class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            New
                        </span>
                    </div>
                    <div class="absolute top-4 right-4 z-10">
                        <button class="w-10 h-10 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-600 hover:text-red-500 transition-colors duration-200 group-hover:bg-white">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-purple-100 to-indigo-100 flex items-center justify-center">
                        <div class="text-6xl text-purple-400">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-purple-600 font-semibold bg-purple-50 px-2 py-1 rounded-lg">Accessory Kit</span>
                        <div class="flex items-center space-x-1">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(45)</span>
                        </div>
                    </div>
                    
                    <h3 class="font-display text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                        Maintenance Kit Pro
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        Complete maintenance kit with tools, cleaning solutions, and replacement parts.
                    </p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <span class="text-2xl font-bold text-gray-900">2,900 EGP</span>
                        </div>
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-lg text-sm font-semibold">Limited</span>
                    </div>
                    
                    <div class="space-y-3">
                        <button class="w-full btn-premium eco-gradient text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300 transform hover:scale-[1.02]">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Add to Cart
                        </button>
                        <button class="w-full bg-gray-100 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-200 transition-colors duration-200">
                            <i class="fas fa-eye mr-2"></i>
                            Quick View
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="product-card machines group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                <div class="relative overflow-hidden">
                    <div class="absolute top-4 right-4 z-10">
                        <button class="w-10 h-10 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-600 hover:text-red-500 transition-colors duration-200 group-hover:bg-white">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-cyan-100 to-blue-100 flex items-center justify-center">
                        <div class="text-6xl text-cyan-400">
                            <i class="fas fa-tint"></i>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-cyan-600 font-semibold bg-cyan-50 px-2 py-1 rounded-lg">Compact Machine</span>
                        <div class="flex items-center space-x-1">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(67)</span>
                        </div>
                    </div>
                    
                    <h3 class="font-display text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                        EchoWater Compact
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        Space-saving design perfect for apartments. 5-stage filtration with touch controls.
                    </p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <span class="text-2xl font-bold text-gray-900">18,500 EGP</span>
                            <span class="text-lg text-gray-400 line-through">22,000 EGP</span>
                        </div>
                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded-lg text-sm font-semibold">Hot Deal</span>
                    </div>
                    
                    <div class="space-y-3">
                        <button class="w-full btn-premium eco-gradient text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300 transform hover:scale-[1.02]">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Add to Cart
                        </button>
                        <button class="w-full bg-gray-100 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-200 transition-colors duration-200">
                            <i class="fas fa-eye mr-2"></i>
                            Quick View
                        </button>
                    </div>
                </div>
            </div>

            <!-- Prime Product Card - EchoWater Machine -->
            <div class="product-card machines group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border-2 border-gradient-to-r from-yellow-400 to-orange-500 relative">
                <!-- Prime Badge -->
                <div class="absolute -top-2 -right-2 z-20">
                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg transform rotate-12">
                        <i class="fas fa-crown mr-1"></i>
                        PRIME
                    </div>
                </div>
                
                <div class="relative overflow-hidden">
                    <div class="absolute top-4 left-4 z-10">
                        <span class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold animate-pulse">
                            <i class="fas fa-bolt mr-1"></i>
                            Premium Choice
                        </span>
                    </div>
                    <div class="absolute top-4 right-4 z-10">
                        <button class="w-10 h-10 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-600 hover:text-red-500 transition-colors duration-200 group-hover:bg-white">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    
                    <!-- Enhanced Machine Image -->
                    <div class="relative">
                        <img src="{{ asset('images/EchoWaterMachine.jpg') }}" alt="EchoWater Prime Machine" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Premium Features Overlay -->
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white/90 backdrop-blur-sm rounded-xl p-3 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-wifi text-blue-500"></i>
                                        <span class="font-semibold">Smart IoT</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-shield-alt text-green-500"></i>
                                        <span class="font-semibold">7-Stage Filter</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="p-6 bg-gradient-to-b from-white to-gray-50">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-sm text-orange-600 font-semibold bg-orange-50 px-3 py-1 rounded-lg border border-orange-200">
                            <i class="fas fa-star mr-1"></i>
                            Prime Machine
                        </span>
                        <div class="flex items-center space-x-1">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm font-semibold">(247)</span>
                        </div>
                    </div>
                    
                    <h3 class="font-display text-xl font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors duration-300">
                        EchoWater Prime Machine
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3 leading-relaxed">
                        The ultimate water purification experience. Professional-grade 7-stage filtration with AI monitoring, 
                        UV sterilization, and premium mineral enhancement technology.
                    </p>
                    
                    <!-- Premium Features List -->
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center space-x-2 text-xs">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span class="text-gray-600">AI Smart Monitoring</span>
                        </div>
                        <div class="flex items-center space-x-2 text-xs">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span class="text-gray-600">UV-C Sterilization</span>
                        </div>
                        <div class="flex items-center space-x-2 text-xs">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span class="text-gray-600">Mineral Enhancement</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <span class="text-2xl font-bold text-gray-900">48,000 EGP</span>
                            <span class="text-lg text-gray-400 line-through">62,000 EGP</span>
                        </div>
                        <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1 rounded-lg text-sm font-semibold animate-pulse">
                            23% OFF
                        </span>
                    </div>
                    
                    <div class="space-y-3">
                        <button class="w-full bg-gradient-to-r from-yellow-500 to-orange-500 text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300 transform hover:scale-[1.02] relative overflow-hidden">
                            <span class="relative z-10">
                                <i class="fas fa-crown mr-2"></i>
                                Add Prime to Cart
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500 transform translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                        </button>
                        <button class="w-full bg-gray-100 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-200 transition-colors duration-200">
                            <i class="fas fa-eye mr-2"></i>
                            View Prime Details
                        </button>
                    </div>
                    
                    <!-- Prime Benefits -->
                    <div class="mt-4 p-3 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-lg border border-yellow-200">
                        <div class="flex items-center space-x-2 text-sm text-orange-700">
                            <i class="fas fa-gift"></i>
                            <span class="font-semibold">Prime Benefits:</span>
                        </div>
                        <ul class="text-xs text-orange-600 mt-1 ml-4">
                            <li>• Free Premium Installation</li>
                            <li>• 5-Year Extended Warranty</li>
                            <li>• Priority Customer Support</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Additional Product Cards (repeat pattern) -->
            <!-- You can add more product cards following the same structure -->
            
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-16">
            <button class="btn-premium bg-white text-blue-600 border-2 border-blue-200 px-12 py-4 rounded-2xl font-semibold text-lg hover:bg-blue-50 hover:border-blue-300 transition-all duration-500 transform hover:scale-105">
                <i class="fas fa-plus mr-3"></i>
                Load More Products
            </button>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gradient-to-br from-blue-900 to-indigo-900 text-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl font-bold mb-4">
                Why Shop With <span class="text-cyan-400">EchoWater?</span>
            </h2>
            <p class="font-body text-xl text-blue-100 max-w-3xl mx-auto">
                Premium shopping experience with unmatched service quality
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-16 h-16 bg-cyan-500/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-cyan-500/30 transition-colors duration-300">
                    <i class="fas fa-shipping-fast text-2xl text-cyan-400"></i>
                </div>
                <h3 class="font-semibold text-lg mb-2">Free Shipping</h3>
                <p class="text-blue-100 text-sm">Free delivery on orders over 10,000 EGP</p>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 bg-green-500/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500/30 transition-colors duration-300">
                    <i class="fas fa-shield-alt text-2xl text-green-400"></i>
                </div>
                <h3 class="font-semibold text-lg mb-2">3-Year Warranty</h3>
                <p class="text-blue-100 text-sm">Comprehensive coverage included</p>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 bg-yellow-500/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-500/30 transition-colors duration-300">
                    <i class="fas fa-headset text-2xl text-yellow-400"></i>
                </div>
                <h3 class="font-semibold text-lg mb-2">24/7 Support</h3>
                <p class="text-blue-100 text-sm">Expert assistance anytime</p>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 bg-purple-500/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-500/30 transition-colors duration-300">
                    <i class="fas fa-undo text-2xl text-purple-400"></i>
                </div>
                <h3 class="font-semibold text-lg mb-2">Easy Returns</h3>
                <p class="text-blue-100 text-sm">30-day return policy</p>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for Enhanced Interactions -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;
            
            // Update active button
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'eco-gradient', 'text-white');
                btn.classList.add('bg-gray-50', 'text-gray-700');
            });
            
            this.classList.remove('bg-gray-50', 'text-gray-700');
            this.classList.add('active', 'eco-gradient', 'text-white');
            
            // Filter products
            productCards.forEach(card => {
                if (filter === 'all' || card.classList.contains(filter)) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeIn 0.5s ease-in-out';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Add to cart functionality
    const addToCartButtons = document.querySelectorAll('.product-card button[class*="eco-gradient"]');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Create cart animation
            const icon = this.querySelector('i');
            const originalClass = icon.className;
            
            icon.className = 'fas fa-check mr-2';
            this.innerHTML = '<i class="fas fa-check mr-2"></i>Added to Cart!';
            this.classList.add('bg-green-500');
            
            setTimeout(() => {
                icon.className = originalClass;
                this.innerHTML = '<i class="fas fa-shopping-cart mr-2"></i>Add to Cart';
                this.classList.remove('bg-green-500');
            }, 2000);
        });
    });
    
    // Wishlist functionality
    const wishlistButtons = document.querySelectorAll('.product-card .fa-heart').forEach(heart => {
        heart.parentElement.addEventListener('click', function() {
            const icon = this.querySelector('i');
            
            if (icon.classList.contains('fas')) {
                icon.classList.remove('fas');
                icon.classList.add('far');
                this.classList.remove('text-red-500');
                this.classList.add('text-gray-600');
            } else {
                icon.classList.remove('far');
                icon.classList.add('fas');
                this.classList.remove('text-gray-600');
                this.classList.add('text-red-500');
            }
        });
    });
});
</script>

<!-- Custom Styles for This Page -->
<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.product-card {
    animation: fadeIn 0.6s ease-out forwards;
}

.product-card:nth-child(1) { animation-delay: 0.1s; }
.product-card:nth-child(2) { animation-delay: 0.2s; }
.product-card:nth-child(3) { animation-delay: 0.3s; }
.product-card:nth-child(4) { animation-delay: 0.4s; }
</style>
@endsection
