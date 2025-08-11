<?php $title = "Products - EchoWater | Premium Water Solutions"; ?>
<?php ob_start(); ?>

<!-- Products Hero Section -->
<section class="bg-gradient-to-br from-water-blue via-water-dark to-eco-green dark:from-dark-800 dark:via-dark-900 dark:to-dark-700 text-white py-16 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="hexPattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <polygon points="10,2 18,7 18,13 10,18 2,13 2,7" fill="white" opacity="0.1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#hexPattern)"/>
        </svg>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
        <div data-aos="fade-up">
            <h1 class="text-5xl lg:text-6xl font-bold mb-6 text-white dark:text-gray-100">Premium Water Solutions</h1>
            <p class="text-xl lg:text-2xl text-blue-100 dark:text-gray-300 mb-8 max-w-3xl mx-auto">
                Discover our revolutionary water purification systems designed for every home and lifestyle
            </p>
        </div>
        
        <!-- Product Categories -->
        <div class="flex flex-wrap justify-center gap-4 mt-8" data-aos="fade-up" data-aos-delay="200">
            <button class="product-filter active px-6 py-3 bg-white/20 dark:bg-white/10 backdrop-blur-sm border border-white/30 dark:border-white/20 rounded-full text-white hover:bg-white/30 dark:hover:bg-white/20 transition-all duration-300" data-category="all">
                All Products
            </button>
            <button class="product-filter px-6 py-3 bg-white/10 dark:bg-white/5 backdrop-blur-sm border border-white/20 dark:border-white/10 rounded-full text-white hover:bg-white/30 dark:hover:bg-white/20 transition-all duration-300" data-category="under-sink">
                Under-sink Systems
            </button>
            <button class="product-filter px-6 py-3 bg-white/10 dark:bg-white/5 backdrop-blur-sm border border-white/20 dark:border-white/10 rounded-full text-white hover:bg-white/30 dark:hover:bg-white/20 transition-all duration-300" data-category="countertop">
                Countertop Purifiers
            </button>
            <button class="product-filter px-6 py-3 bg-white/10 dark:bg-white/5 backdrop-blur-sm border border-white/20 dark:border-white/10 rounded-full text-white hover:bg-white/30 dark:hover:bg-white/20 transition-all duration-300" data-category="whole-house">
                Whole-house Solutions
            </button>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-16 bg-gray-50 dark:bg-dark-900">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-gray-800 dark:text-gray-100 mb-4">Featured Products</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400">Our most popular water purification systems</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="products-grid">
            
            <!-- Product 1: EchoMax Pro -->
            <div class="product-card group card-hover bg-white dark:bg-dark-800 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-dark-700" data-category="under-sink" data-aos="fade-up" data-aos-delay="100">
                <div class="relative h-64 bg-gradient-to-br from-water-blue to-water-dark overflow-hidden">
                    <!-- Product Image Placeholder with SVG -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-32 h-32 text-white/80 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                        </svg>
                    </div>
                    
                    <!-- Rating Badge -->
                    <div class="absolute top-4 left-4 bg-white/90 dark:bg-dark-800/90 backdrop-blur-sm rounded-full px-3 py-1 flex items-center">
                        <span class="text-yellow-500 text-sm mr-1">⭐</span>
                        <span class="text-sm font-medium text-gray-800 dark:text-gray-100">4.8</span>
                    </div>
                    
                    <!-- New Badge -->
                    <div class="absolute top-4 right-4 bg-eco-green dark:bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        NEW
                    </div>
                    
                    <!-- Hover Overlay -->
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button class="bg-white dark:bg-dark-700 text-water-blue dark:text-water-light px-6 py-2 rounded-full font-semibold transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            Quick View
                        </button>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-eco-green dark:text-green-400 font-medium bg-eco-green/10 dark:bg-green-900/20 px-3 py-1 rounded-full">Under-sink System</span>
                        <i class="fas fa-heart text-gray-300 dark:text-gray-600 hover:text-red-500 dark:hover:text-red-400 cursor-pointer transition-colors duration-300"></i>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-2">EchoMax Pro</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm leading-relaxed">
                        7-stage advanced filtration system with smart monitoring capabilities for premium water quality.
                    </p>
                    
                    <!-- Features -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-blue-100 dark:bg-blue-900/20 text-blue-800 dark:text-blue-400 px-2 py-1 rounded-full">Smart IoT</span>
                        <span class="text-xs bg-green-100 dark:bg-green-900/20 text-green-800 dark:text-green-400 px-2 py-1 rounded-full">7-Stage</span>
                        <span class="text-xs bg-purple-100 dark:bg-purple-900/20 text-purple-800 dark:text-purple-400 px-2 py-1 rounded-full">UV Sterilization</span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-water-blue dark:text-water-light">$599.99</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400 line-through ml-2">$799.99</span>
                        </div>
                        <button class="bg-gradient-to-r from-water-blue to-water-dark dark:from-water-light dark:to-water-blue text-white px-6 py-2 rounded-xl font-medium hover:from-water-dark hover:to-water-blue dark:hover:from-water-blue dark:hover:to-water-dark transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg hover:shadow-xl">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2: AquaFlow Elite -->
            <div class="product-card group card-hover bg-white dark:bg-dark-800 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-dark-700" data-category="countertop" data-aos="fade-up" data-aos-delay="200">
                <div class="relative h-64 bg-gradient-to-br from-eco-green to-green-600 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-32 h-32 text-white/80 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2L3 7v11h14V7l-7-5z"/>
                        </svg>
                    </div>
                    
                    <div class="absolute top-4 left-4 bg-white/90 dark:bg-dark-800/90 backdrop-blur-sm rounded-full px-3 py-1 flex items-center">
                        <span class="text-yellow-500 text-sm mr-1">⭐</span>
                        <span class="text-sm font-medium text-gray-800 dark:text-gray-100">4.6</span>
                    </div>
                    
                    <div class="absolute top-4 right-4 bg-water-blue dark:bg-water-light text-white text-xs font-bold px-3 py-1 rounded-full">
                        BESTSELLER
                    </div>
                    
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button class="bg-white dark:bg-dark-700 text-eco-green dark:text-green-400 px-6 py-2 rounded-full font-semibold transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            Quick View
                        </button>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-water-blue dark:text-water-light font-medium bg-water-blue/10 dark:bg-blue-900/20 px-3 py-1 rounded-full">Countertop Purifier</span>
                        <i class="fas fa-heart text-gray-300 dark:text-gray-600 hover:text-red-500 dark:hover:text-red-400 cursor-pointer transition-colors duration-300"></i>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-2">AquaFlow Elite</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm leading-relaxed">
                        Compact countertop purifier with advanced mineral retention technology for healthy drinking water.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-green-100 dark:bg-green-900/20 text-green-800 dark:text-green-400 px-2 py-1 rounded-full">Mineral Retention</span>
                        <span class="text-xs bg-blue-100 dark:bg-blue-900/20 text-blue-800 dark:text-blue-400 px-2 py-1 rounded-full">Compact</span>
                        <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">LED Indicators</span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-eco-green">$299.99</span>
                            <span class="text-sm text-gray-500 line-through ml-2">$349.99</span>
                        </div>
                        <button class="bg-gradient-to-r from-eco-green to-green-600 text-white px-6 py-2 rounded-xl font-medium hover:from-green-600 hover:to-eco-green transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg hover:shadow-xl">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3: PureHouse Complete -->
            <div class="product-card group card-hover bg-white dark:bg-dark-800 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-dark-700" data-category="whole-house" data-aos="fade-up" data-aos-delay="300">
                <div class="relative h-64 bg-gradient-to-br from-purple-600 to-water-dark overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-32 h-32 text-white/80 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                    </div>
                    
                    <div class="absolute top-4 left-4 bg-white/90 dark:bg-dark-800/90 backdrop-blur-sm rounded-full px-3 py-1 flex items-center">
                        <span class="text-yellow-500 text-sm mr-1">⭐</span>
                        <span class="text-sm font-medium text-gray-800 dark:text-gray-100">4.9</span>
                    </div>
                    
                    <div class="absolute top-4 right-4 bg-purple-500 dark:bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full">
                        PREMIUM
                    </div>
                    
                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button class="bg-white dark:bg-dark-700 text-purple-600 dark:text-purple-400 px-6 py-2 rounded-full font-semibold transform translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            Quick View
                        </button>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-purple-600 dark:text-purple-400 font-medium bg-purple-100 dark:bg-purple-900/20 px-3 py-1 rounded-full">Whole-house Solution</span>
                        <i class="fas fa-heart text-gray-300 dark:text-gray-600 hover:text-red-500 dark:hover:text-red-400 cursor-pointer transition-colors duration-300"></i>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-2">PureHouse Complete</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm leading-relaxed">
                        Complete whole-house water treatment system with professional installation and monitoring.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-purple-100 dark:bg-purple-900/20 text-purple-800 dark:text-purple-400 px-2 py-1 rounded-full">Whole-house</span>
                        <span class="text-xs bg-blue-100 dark:bg-blue-900/20 text-blue-800 dark:text-blue-400 px-2 py-1 rounded-full">Professional Install</span>
                        <span class="text-xs bg-green-100 dark:bg-green-900/20 text-green-800 dark:text-green-400 px-2 py-1 rounded-full">Multi-stage</span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-purple-600 dark:text-purple-400">$1,299.99</span>
                            <span class="text-sm text-gray-500 line-through ml-2">$1,499.99</span>
                        </div>
                        <button class="bg-gradient-to-r from-purple-600 to-water-dark text-white px-6 py-2 rounded-xl font-medium hover:from-water-dark hover:to-purple-600 transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg hover:shadow-xl">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Section -->
<section class="py-16 bg-white dark:bg-dark-800">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-gray-800 dark:text-gray-100 mb-4">Compare Our Products</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400">Find the perfect solution for your needs</p>
        </div>

        <div class="overflow-x-auto" data-aos="fade-up" data-aos-delay="200">
            <table class="w-full bg-white dark:bg-dark-700 rounded-3xl shadow-lg overflow-hidden border border-gray-100 dark:border-dark-600">
                <thead class="bg-gradient-to-r from-water-blue to-water-dark dark:from-dark-600 dark:to-dark-700 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left font-semibold">Feature</th>
                        <th class="px-6 py-4 text-center font-semibold">EchoMax Pro</th>
                        <th class="px-6 py-4 text-center font-semibold">AquaFlow Elite</th>
                        <th class="px-6 py-4 text-center font-semibold">PureHouse Complete</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-dark-600">
                    <tr class="hover:bg-gray-50 dark:hover:bg-dark-600 transition-colors duration-300">
                        <td class="px-6 py-4 font-medium text-gray-800 dark:text-gray-100">Filtration Stages</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">7 stages</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">5 stages</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">10 stages</td>
                    </tr>
                    <tr class="hover:bg-gray-50 dark:hover:bg-dark-600 transition-colors duration-300">
                        <td class="px-6 py-4 font-medium text-gray-800 dark:text-gray-100">Flow Rate</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">2.5 GPM</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">1.5 GPM</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">10 GPM</td>
                    </tr>
                    <tr class="hover:bg-gray-50 dark:hover:bg-dark-600 transition-colors duration-300">
                        <td class="px-6 py-4 font-medium text-gray-800 dark:text-gray-100">Smart Monitoring</td>
                        <td class="px-6 py-4 text-center">
                            <i class="fas fa-check text-green-500 dark:text-green-400 text-xl"></i>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <i class="fas fa-times text-red-500 dark:text-red-400 text-xl"></i>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <i class="fas fa-check text-green-500 dark:text-green-400 text-xl"></i>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 dark:hover:bg-dark-600 transition-colors duration-300">
                        <td class="px-6 py-4 font-medium text-gray-800 dark:text-gray-100">Professional Installation</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">Optional</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">DIY</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">Included</td>
                    </tr>
                    <tr class="hover:bg-gray-50 dark:hover:bg-dark-600 transition-colors duration-300">
                        <td class="px-6 py-4 font-medium text-gray-800 dark:text-gray-100">Warranty</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">3 years</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">2 years</td>
                        <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">5 years</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Why Choose EchoWater?</h2>
            <p class="text-xl text-gray-600">Advanced technology meets superior performance</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-gradient-to-r from-water-blue to-eco-green rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-certificate text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Certified Quality</h3>
                <p class="text-gray-600">NSF and WQA certified for superior performance and safety standards.</p>
            </div>

            <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-gradient-to-r from-eco-green to-green-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-tools text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Expert Installation</h3>
                <p class="text-gray-600">Professional installation and setup by certified technicians.</p>
            </div>

            <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-water-blue rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-headset text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">24/7 Support</h3>
                <p class="text-gray-600">Round-the-clock customer support and maintenance services.</p>
            </div>

            <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 bg-gradient-to-r from-water-dark to-purple-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-recycle text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Eco-Friendly</h3>
                <p class="text-gray-600">Sustainable design with recyclable components and energy efficiency.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-water-blue to-water-dark text-white">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">
            Ready to Transform Your Water?
        </h2>
        <p class="text-xl mb-8 opacity-90" data-aos="fade-up" data-aos-delay="100">
            Get expert advice and find the perfect water purification solution for your home
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">
            <a href="/dashboard" class="bg-white text-water-blue px-8 py-4 rounded-2xl font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 inline-flex items-center justify-center">
                <i class="fas fa-calculator mr-3"></i>
                Water Quality Test
            </a>
            <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-2xl font-semibold hover:bg-white hover:text-water-blue transition-all duration-300 inline-flex items-center justify-center">
                <i class="fas fa-phone mr-3"></i>
                Call Expert: (555) 123-4567
            </a>
        </div>
    </div>
</section>

<script>
// Product filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.product-filter');
    const productCards = document.querySelectorAll('.product-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active button
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-white/20');
                btn.classList.add('bg-white/10');
            });
            this.classList.add('active', 'bg-white/20');
            this.classList.remove('bg-white/10');
            
            // Filter products
            productCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.opacity = '1';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
});
</script>

<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/layouts/modern.php'; ?>
