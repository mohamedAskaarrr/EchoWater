<?php $title = "Home - EchoWater | Pure Innovation"; ?>
<?php ob_start(); ?>

<!-- Hero Section with Interactive Elements -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-50 via-white to-cyan-50 dark:from-dark-950 dark:via-dark-900 dark:to-dark-800">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-water-light dark:bg-water-dark rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-30 dark:opacity-20 animate-float"></div>
        <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-eco-light dark:bg-eco-green rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-20 dark:opacity-15 animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-water-blue dark:bg-water-light rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-10 dark:opacity-8 animate-float" style="animation-delay: 4s;"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 py-20 text-center">
        <!-- Main Hero Content -->
        <div class="mb-8" data-aos="fade-up">
            <div class="inline-flex items-center bg-white/30 dark:bg-dark-800/30 backdrop-blur-sm border border-white/20 dark:border-gray-700/30 rounded-full px-6 py-2 mb-6">
                <i class="fas fa-award text-water-blue dark:text-water-light mr-2"></i>
                <span class="text-sm text-gray-700 dark:text-gray-300">Award-winning water purification technology</span>
            </div>
            
            <h1 class="text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                <span class="gradient-text">Pure Water,</span><br>
                <span class="text-gray-800 dark:text-gray-100">Pure Innovation</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-gray-600 dark:text-gray-400 mb-8 max-w-3xl mx-auto leading-relaxed">
                Experience the future of water purification with <strong class="text-gray-800 dark:text-gray-200">EchoWater's</strong> revolutionary 
                smart filtration systems. Clean, safe, and sustainable water for every home.
            </p>
        </div>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16" data-aos="fade-up" data-aos-delay="200">
            <a href="/products" class="group bg-gradient-to-r from-water-blue to-water-dark text-white px-8 py-4 rounded-2xl font-semibold hover:from-water-dark hover:to-water-blue transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center">
                <i class="fas fa-rocket mr-3 group-hover:rotate-12 transition-transform duration-300"></i>
                Explore Products
                <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
            </a>
            <a href="/dashboard" class="group glass-effect text-water-dark dark:text-water-light px-8 py-4 rounded-2xl font-semibold hover:bg-white/40 dark:hover:bg-dark-800/40 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center">
                <i class="fas fa-chart-line mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                Smart Dashboard
                <i class="fas fa-external-link-alt ml-3 group-hover:rotate-12 transition-transform duration-300"></i>
            </a>
        </div>

        <!-- Interactive Water Drop Animation -->
        <div class="relative" data-aos="zoom-in" data-aos-delay="400">
            <svg class="w-32 h-32 mx-auto mb-8 cursor-pointer transform hover:scale-110 transition-transform duration-300" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="dropGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#0ea5e9;stop-opacity:1" />
                        <stop offset="50%" style="stop-color:#0284c7;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#0c4a6e;stop-opacity:1" />
                    </linearGradient>
                    <linearGradient id="dropGradientDark" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#7dd3fc;stop-opacity:1" />
                        <stop offset="50%" style="stop-color:#0ea5e9;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#0284c7;stop-opacity:1" />
                    </linearGradient>
                    <filter id="dropShadow">
                        <feDropShadow dx="0" dy="10" stdDeviation="5" flood-color="#0284c7" flood-opacity="0.3"/>
                    </filter>
                </defs>
                <!-- Main water drop -->
                <path d="M100 40 C70 80, 70 120, 100 140 C130 120, 130 80, 100 40 Z" 
                      fill="url(#dropGradient)" 
                      filter="url(#dropShadow)"
                      class="animate-pulse-slow dark:hidden"/>
                <path d="M100 40 C70 80, 70 120, 100 140 C130 120, 130 80, 100 40 Z" 
                      fill="url(#dropGradientDark)" 
                      filter="url(#dropShadow)"
                      class="animate-pulse-slow hidden dark:block"/>
                <!-- Highlight -->
                <ellipse cx="85" cy="70" rx="8" ry="12" fill="white" opacity="0.7" class="animate-pulse"/>
                <!-- Ripple effects -->
                <circle cx="100" cy="140" r="20" fill="none" stroke="#0ea5e9" stroke-width="2" opacity="0.3" class="animate-ping"/>
                <circle cx="100" cy="140" r="30" fill="none" stroke="#0284c7" stroke-width="1" opacity="0.2" class="animate-ping" style="animation-delay: 0.5s"/>
            </svg>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <i class="fas fa-chevron-down text-water-blue dark:text-water-light text-2xl"></i>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-white dark:bg-dark-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-hero-pattern opacity-5 dark:opacity-2"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 dark:text-gray-100 mb-6">
                Why Choose <span class="gradient-text">EchoWater</span>?
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                Advanced technology meets sustainable design for the ultimate water purification experience
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group card-hover bg-white dark:bg-dark-800 rounded-3xl p-8 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-r from-water-blue to-eco-green rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">Advanced Filtration</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    7-stage purification process removes 99.9% of contaminants while preserving essential minerals for optimal health.
                </p>
                <div class="mt-6 flex items-center text-water-blue dark:text-water-light font-semibold">
                    Learn more <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="group card-hover bg-white dark:bg-dark-800 rounded-3xl p-8 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-r from-eco-green to-water-blue rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-mobile-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">Smart Monitoring</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Real-time water quality tracking with IoT sensors and mobile app control for complete peace of mind.
                </p>
                <div class="mt-6 flex items-center text-water-blue dark:text-water-light font-semibold">
                    Learn more <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="group card-hover bg-white dark:bg-dark-800 rounded-3xl p-8 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-r from-water-blue to-water-dark rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-leaf text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">Eco-Friendly</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Sustainable design with recyclable filters and energy-efficient operation reduces environmental impact.
                </p>
                <div class="mt-6 flex items-center text-water-blue dark:text-water-light font-semibold">
                    Learn more <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 bg-gradient-to-r from-water-blue to-water-dark dark:from-dark-800 dark:to-dark-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="wave" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M0 50 Q25 25 50 50 T100 50 V100 H0 Z" fill="white" opacity="0.1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#wave)"/>
        </svg>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div data-aos="zoom-in" data-aos-delay="100">
                <div class="text-4xl lg:text-5xl font-bold mb-2">10k+</div>
                <div class="text-blue-200">Happy Customers</div>
            </div>
            <div data-aos="zoom-in" data-aos-delay="200">
                <div class="text-4xl lg:text-5xl font-bold mb-2">99.9%</div>
                <div class="text-blue-200">Purity Rate</div>
            </div>
            <div data-aos="zoom-in" data-aos-delay="300">
                <div class="text-4xl lg:text-5xl font-bold mb-2">50+</div>
                <div class="text-blue-200">Countries</div>
            </div>
            <div data-aos="zoom-in" data-aos-delay="400">
                <div class="text-4xl lg:text-5xl font-bold mb-2">24/7</div>
                <div class="text-blue-200">Smart Monitoring</div>
            </div>
        </div>
    </div>
</section>

<!-- Product Showcase -->
<section class="py-20 bg-gray-50 dark:bg-dark-900">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 dark:text-gray-100 mb-6">
                Our <span class="gradient-text">Premium Products</span>
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400">Discover our range of innovative water purification solutions</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Product Card 1 -->
            <div class="group card-hover bg-white dark:bg-dark-800 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 bg-gradient-to-br from-water-blue to-water-dark flex items-center justify-center">
                    <svg class="w-24 h-24 text-white group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0zm8-6a6 6 0 0 0-6 6c0 1.3.4 2.5 1.1 3.5l8.4-8.4A5.96 5.96 0 0 0 10 4z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-gray-800 dark:text-gray-100">EchoMax Pro</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Advanced 7-stage filtration with smart monitoring</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-water-blue dark:text-water-light">$599</span>
                        <button class="bg-water-blue hover:bg-water-dark dark:bg-water-light dark:hover:bg-water-blue text-white px-4 py-2 rounded-lg transition-colors">
                            View Details
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="group card-hover bg-white dark:bg-dark-800 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 bg-gradient-to-br from-eco-green to-water-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2L3 7v11h14V7l-7-5z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-gray-800 dark:text-gray-100">AquaFlow Elite</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Compact countertop purifier with mineral retention</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-water-blue dark:text-water-light">$299</span>
                        <button class="bg-water-blue hover:bg-water-dark dark:bg-water-light dark:hover:bg-water-blue text-white px-4 py-2 rounded-lg transition-colors">
                            View Details
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="group card-hover bg-white dark:bg-dark-800 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="300">
                <div class="h-48 bg-gradient-to-br from-water-dark to-eco-green flex items-center justify-center">
                    <svg class="w-24 h-24 text-white group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4zM3 10a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-6z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-gray-800 dark:text-gray-100">PureHouse Complete</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Whole-house solution with professional installation</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-water-blue dark:text-water-light">$1299</span>
                        <button class="bg-water-blue hover:bg-water-dark dark:bg-water-light dark:hover:bg-water-blue text-white px-4 py-2 rounded-lg transition-colors">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="400">
            <a href="/products" class="bg-gradient-to-r from-water-blue to-water-dark dark:from-water-light dark:to-water-blue text-white px-8 py-4 rounded-2xl font-semibold hover:from-water-dark hover:to-water-blue dark:hover:from-water-blue dark:hover:to-water-dark transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center">
                View All Products
                <i class="fas fa-arrow-right ml-3"></i>
            </a>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 bg-gradient-to-r from-water-blue to-water-dark dark:from-dark-800 dark:to-dark-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black dark:bg-dark-900 opacity-20"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white dark:text-gray-100">Pure Impact</h2>
            <p class="text-xl text-blue-100 dark:text-gray-300 max-w-3xl mx-auto">
                Trusted by thousands of families worldwide for cleaner, healthier water solutions
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl font-bold mb-4 text-white dark:text-gray-100">50K+</div>
                <div class="text-blue-100 dark:text-gray-300 text-lg">Happy Families</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl font-bold mb-4 text-white dark:text-gray-100">99.9%</div>
                <div class="text-blue-100 dark:text-gray-300 text-lg">Purity Rate</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                <div class="text-5xl font-bold mb-4 text-white dark:text-gray-100">24/7</div>
                <div class="text-blue-100 dark:text-gray-300 text-lg">Smart Monitoring</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                <div class="text-5xl font-bold mb-4 text-white dark:text-gray-100">5 Years</div>
                <div class="text-blue-100 dark:text-gray-300 text-lg">Warranty</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gray-50 dark:bg-dark-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 dark:text-gray-100 mb-6">What Customers Say</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                Real stories from real families who transformed their water quality with EchoWater
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white dark:bg-dark-800 rounded-3xl p-8 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-6">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-6 italic leading-relaxed">
                    "The water quality improvement was immediate and noticeable. Our whole family feels healthier and the taste is incredible!"
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-water-blue to-water-dark rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">SJ</span>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-800 dark:text-gray-100">Sarah Johnson</div>
                        <div class="text-gray-500 dark:text-gray-500 text-sm">Family of 4, California</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white dark:bg-dark-800 rounded-3xl p-8 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center mb-6">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-6 italic leading-relaxed">
                    "The smart monitoring feature gives me complete peace of mind. I can check water quality from anywhere!"
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-eco-green to-water-blue rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">MC</span>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-800 dark:text-gray-100">Mike Chen</div>
                        <div class="text-gray-500 dark:text-gray-500 text-sm">Tech Professional, Texas</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white dark:bg-dark-800 rounded-3xl p-8 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center mb-6">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-6 italic leading-relaxed">
                    "Best investment we've made for our home. The eco-friendly design aligns with our values perfectly."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-water-dark to-eco-green rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">ED</span>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-800 dark:text-gray-100">Emily Davis</div>
                        <div class="text-gray-500 dark:text-gray-500 text-sm">Environmental Scientist, Oregon</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-water-blue via-water-dark to-eco-green dark:from-dark-800 dark:via-dark-900 dark:to-dark-700 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-0 w-full h-full bg-hero-pattern"></div>
    </div>
    
    <div class="relative z-10 max-w-4xl mx-auto text-center px-4">
        <h2 class="text-4xl lg:text-5xl font-bold mb-6 text-white dark:text-gray-100" data-aos="fade-up">
            Ready to Experience Pure Water?
        </h2>
        <p class="text-xl mb-8 opacity-90 text-blue-100 dark:text-gray-300" data-aos="fade-up" data-aos-delay="100">
            Join thousands of satisfied customers who trust EchoWater for their water purification needs
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">
            <a href="/register" class="bg-white dark:bg-dark-700 text-water-blue dark:text-water-light px-8 py-4 rounded-2xl font-semibold hover:bg-gray-100 dark:hover:bg-dark-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center">
                <i class="fas fa-user-plus mr-3"></i>
                Get Started Today
            </a>
            <a href="/products" class="border-2 border-white dark:border-gray-300 text-white dark:text-gray-100 px-8 py-4 rounded-2xl font-semibold hover:bg-white hover:text-water-blue dark:hover:bg-gray-100 dark:hover:text-water-blue transition-all duration-300 inline-flex items-center">
                <i class="fas fa-shopping-cart mr-3"></i>
                Shop Now
            </a>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/layouts/modern.php'; ?>
