@extends('layouts.premium-app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-white via-blue-50/30 to-purple-50/20 py-24">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(14,165,233,0.05),transparent_50%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_20%,rgba(139,92,246,0.05),transparent_50%)]"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-6 text-center">
        <div class="mb-12">
            <h1 class="font-display text-5xl md:text-6xl font-bold text-gray-900 mb-6 animate-slide-up">
                We Value Your <span class="gradient-text">Feedback</span>
            </h1>
            <p class="font-body text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed animate-slide-up" style="animation-delay: 0.2s;">
                Your insights help us create better water solutions for everyone. Share your experience and help us improve our products and services.
            </p>
        </div>
        
        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16 animate-scale-in" style="animation-delay: 0.4s;">
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/50">
                <div class="text-3xl font-bold text-blue-600 mb-2">4.9</div>
                <p class="text-gray-600 text-sm">Average Rating</p>
            </div>
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/50">
                <div class="text-3xl font-bold text-green-600 mb-2">12K+</div>
                <p class="text-gray-600 text-sm">Happy Customers</p>
            </div>
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/50">
                <div class="text-3xl font-bold text-purple-600 mb-2">98%</div>
                <p class="text-gray-600 text-sm">Satisfaction Rate</p>
            </div>
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/50">
                <div class="text-3xl font-bold text-orange-600 mb-2">24/7</div>
                <p class="text-gray-600 text-sm">Support Available</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50/30">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Feedback Form -->
            <div class="order-2 lg:order-1">
                <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/50 p-8">
                    <div class="mb-8">
                        <h2 class="font-display text-3xl font-bold text-gray-900 mb-4">Share Your Experience</h2>
                        <p class="font-body text-gray-600">Tell us about your EchoWater journey and help us serve you better.</p>
                    </div>
                    
                    <form class="space-y-8">
                        <!-- Rating Section -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-4">Overall Rating</label>
                            <div class="flex items-center space-x-2 mb-4">
                                <div class="flex space-x-1" id="rating-stars">
                                    <button type="button" class="star text-3xl text-gray-300 hover:text-yellow-400 transition-colors duration-200" data-rating="1">
                                        <i class="fas fa-star"></i>
                                    </button>
                                    <button type="button" class="star text-3xl text-gray-300 hover:text-yellow-400 transition-colors duration-200" data-rating="2">
                                        <i class="fas fa-star"></i>
                                    </button>
                                    <button type="button" class="star text-3xl text-gray-300 hover:text-yellow-400 transition-colors duration-200" data-rating="3">
                                        <i class="fas fa-star"></i>
                                    </button>
                                    <button type="button" class="star text-3xl text-gray-300 hover:text-yellow-400 transition-colors duration-200" data-rating="4">
                                        <i class="fas fa-star"></i>
                                    </button>
                                    <button type="button" class="star text-3xl text-gray-300 hover:text-yellow-400 transition-colors duration-200" data-rating="5">
                                        <i class="fas fa-star"></i>
                                    </button>
                                </div>
                                <span id="rating-text" class="text-gray-500 ml-4 font-medium">Click to rate</span>
                            </div>
                        </div>

                        <!-- Personal Info -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Your Name</label>
                                <div class="relative group">
                                    <input type="text" id="name" name="name" required 
                                           class="input-premium w-full px-4 py-4 pl-12 text-gray-700 placeholder-gray-400"
                                           placeholder="Enter your full name">
                                    <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 group-hover:text-blue-500 transition-colors duration-200"></i>
                                </div>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email Address</label>
                                <div class="relative group">
                                    <input type="email" id="email" name="email" required 
                                           class="input-premium w-full px-4 py-4 pl-12 text-gray-700 placeholder-gray-400"
                                           placeholder="Enter your email">
                                    <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 group-hover:text-blue-500 transition-colors duration-200"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Product Category -->
                        <div>
                            <label for="product" class="block text-sm font-bold text-gray-700 mb-2">Product Category</label>
                            <div class="relative">
                                <select id="product" name="product" class="input-premium w-full px-4 py-4 pl-12 pr-10 text-gray-700 appearance-none cursor-pointer">
                                    <option value="">Select a product category</option>
                                    <option value="water-machines">Water Machines</option>
                                    <option value="filters">Filters & Cartridges</option>
                                    <option value="accessories">Accessories</option>
                                    <option value="maintenance">Maintenance Services</option>
                                    <option value="other">Other</option>
                                </select>
                                <i class="fas fa-tint absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <i class="fas fa-chevron-down absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                            </div>
                        </div>

                        <!-- Feedback Message -->
                        <div>
                            <label for="message" class="block text-sm font-bold text-gray-700 mb-2">Your Feedback</label>
                            <div class="relative group">
                                <textarea id="message" name="message" rows="6" required 
                                          class="input-premium w-full px-4 py-4 pl-12 text-gray-700 placeholder-gray-400 resize-none"
                                          placeholder="Share your experience, suggestions, or concerns..."></textarea>
                                <i class="fas fa-comment absolute left-4 top-4 text-gray-400 group-hover:text-blue-500 transition-colors duration-200"></i>
                            </div>
                        </div>

                        <!-- Additional Options -->
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="newsletter" name="newsletter" class="sr-only">
                                <div class="checkbox-custom w-5 h-5 bg-gray-200 rounded-lg border-2 border-gray-300 flex items-center justify-center cursor-pointer transition-all duration-200">
                                    <i class="fas fa-check text-white text-xs opacity-0"></i>
                                </div>
                                <label for="newsletter" class="ml-3 text-sm font-medium text-gray-700 cursor-pointer">
                                    Subscribe to our newsletter for updates and exclusive offers
                                </label>
                            </div>
                            
                            <div class="flex items-center">
                                <input type="checkbox" id="follow-up" name="follow-up" class="sr-only">
                                <div class="checkbox-custom w-5 h-5 bg-gray-200 rounded-lg border-2 border-gray-300 flex items-center justify-center cursor-pointer transition-all duration-200">
                                    <i class="fas fa-check text-white text-xs opacity-0"></i>
                                </div>
                                <label for="follow-up" class="ml-3 text-sm font-medium text-gray-700 cursor-pointer">
                                    Allow our team to contact you for follow-up questions
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full btn-premium eco-gradient text-white py-4 rounded-2xl font-bold text-lg shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-[1.02] relative overflow-hidden group">
                            <span class="relative z-10 flex items-center justify-center">
                                <i class="fas fa-paper-plane mr-3 group-hover:animate-bounce"></i>
                                Submit Feedback
                            </span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Testimonials & Info -->
            <div class="order-1 lg:order-2 space-y-8">
                <!-- Contact Info Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/50 text-center group hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-phone text-white text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Call Us</h3>
                        <p class="text-gray-600 text-sm">+1 (555) 123-4567</p>
                        <p class="text-gray-500 text-xs mt-1">24/7 Support Available</p>
                    </div>
                    
                    <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/50 text-center group hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Email Us</h3>
                        <p class="text-gray-600 text-sm">support@echowater.com</p>
                        <p class="text-gray-500 text-xs mt-1">Response within 2 hours</p>
                    </div>
                </div>

                <!-- Recent Testimonials -->
                <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-xl border border-white/50 p-8">
                    <h3 class="font-display text-2xl font-bold text-gray-900 mb-6">What Our Customers Say</h3>
                    
                    <div class="space-y-6">
                        <!-- Testimonial 1 -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-blue-50/50 rounded-r-2xl">
                            <div class="flex items-center mb-3">
                                <div class="flex text-yellow-400 text-sm mr-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="font-semibold text-gray-900">Sarah Johnson</span>
                            </div>
                            <p class="text-gray-700 text-sm italic leading-relaxed">
                                "The EchoWater Pro Max completely transformed our water quality. Installation was seamless and the smart monitoring features are incredible!"
                            </p>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="border-l-4 border-green-500 pl-6 py-4 bg-green-50/50 rounded-r-2xl">
                            <div class="flex items-center mb-3">
                                <div class="flex text-yellow-400 text-sm mr-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="font-semibold text-gray-900">Michael Chen</span>
                            </div>
                            <p class="text-gray-700 text-sm italic leading-relaxed">
                                "Outstanding customer service and product quality. The team went above and beyond to ensure everything was perfect. Highly recommended!"
                            </p>
                        </div>
                        
                        <!-- Testimonial 3 -->
                        <div class="border-l-4 border-purple-500 pl-6 py-4 bg-purple-50/50 rounded-r-2xl">
                            <div class="flex items-center mb-3">
                                <div class="flex text-yellow-400 text-sm mr-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="font-semibold text-gray-900">Emily Rodriguez</span>
                            </div>
                            <p class="text-gray-700 text-sm italic leading-relaxed">
                                "Three years with EchoWater and still amazed by the consistent quality. The maintenance service is prompt and professional."
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Section -->
                <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-xl border border-white/50 p-8">
                    <h3 class="font-display text-2xl font-bold text-gray-900 mb-6">Quick Support</h3>
                    
                    <div class="space-y-4">
                        <div class="group cursor-pointer">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-2xl group-hover:bg-blue-50 transition-colors duration-200">
                                <span class="font-semibold text-gray-900">Installation Support</span>
                                <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition-colors duration-200"></i>
                            </div>
                        </div>
                        
                        <div class="group cursor-pointer">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-2xl group-hover:bg-green-50 transition-colors duration-200">
                                <span class="font-semibold text-gray-900">Product Warranty</span>
                                <i class="fas fa-chevron-right text-gray-400 group-hover:text-green-500 transition-colors duration-200"></i>
                            </div>
                        </div>
                        
                        <div class="group cursor-pointer">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-2xl group-hover:bg-purple-50 transition-colors duration-200">
                                <span class="font-semibold text-gray-900">Maintenance Guide</span>
                                <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition-colors duration-200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for Enhanced Interactions -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Star Rating System
    const stars = document.querySelectorAll('.star');
    const ratingText = document.getElementById('rating-text');
    let currentRating = 0;
    
    const ratingMessages = {
        1: "Poor - We'll do better",
        2: "Fair - Room for improvement", 
        3: "Good - Meeting expectations",
        4: "Very Good - Above expectations",
        5: "Excellent - Outstanding experience!"
    };
    
    stars.forEach((star, index) => {
        star.addEventListener('click', function() {
            currentRating = index + 1;
            updateStars(currentRating);
            ratingText.textContent = ratingMessages[currentRating];
            ratingText.className = 'text-yellow-600 ml-4 font-bold';
        });
        
        star.addEventListener('mouseenter', function() {
            updateStars(index + 1, true);
        });
    });
    
    document.getElementById('rating-stars').addEventListener('mouseleave', function() {
        updateStars(currentRating);
    });
    
    function updateStars(rating, isHover = false) {
        stars.forEach((star, index) => {
            if (index < rating) {
                star.classList.remove('text-gray-300');
                star.classList.add('text-yellow-400');
                if (!isHover) {
                    star.classList.add('animate-bounce');
                    setTimeout(() => star.classList.remove('animate-bounce'), 300);
                }
            } else {
                star.classList.remove('text-yellow-400');
                star.classList.add('text-gray-300');
            }
        });
    }
    
    // Enhanced Checkbox Functionality
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    
    checkboxes.forEach(checkbox => {
        const customCheckbox = checkbox.nextElementSibling;
        const checkIcon = customCheckbox.querySelector('i');
        
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                customCheckbox.classList.remove('bg-gray-200', 'border-gray-300');
                customCheckbox.classList.add('bg-blue-500', 'border-blue-500');
                checkIcon.classList.remove('opacity-0');
                checkIcon.classList.add('opacity-100');
                customCheckbox.classList.add('animate-pulse');
                setTimeout(() => customCheckbox.classList.remove('animate-pulse'), 300);
            } else {
                customCheckbox.classList.remove('bg-blue-500', 'border-blue-500');
                customCheckbox.classList.add('bg-gray-200', 'border-gray-300');
                checkIcon.classList.remove('opacity-100');
                checkIcon.classList.add('opacity-0');
            }
        });
        
        // Click functionality
        customCheckbox.addEventListener('click', function() {
            checkbox.checked = !checkbox.checked;
            checkbox.dispatchEvent(new Event('change'));
        });
    });
    
    // Form Validation with Visual Feedback
    const form = document.querySelector('form');
    const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
    
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            if (this.value !== '') {
                this.classList.remove('border-red-300', 'bg-red-50');
                this.classList.add('border-green-300', 'bg-green-50');
            }
        });
    });
    
    function validateField(field) {
        if (field.value === '' || (field.type === 'email' && !isValidEmail(field.value))) {
            field.classList.add('border-red-300', 'bg-red-50');
            field.classList.remove('border-green-300', 'bg-green-50');
            return false;
        } else {
            field.classList.remove('border-red-300', 'bg-red-50');
            field.classList.add('border-green-300', 'bg-green-50');
            return true;
        }
    }
    
    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
    
    // Form Submission with Success Animation
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        inputs.forEach(input => {
            if (!validateField(input)) {
                isValid = false;
            }
        });
        
        if (currentRating === 0) {
            ratingText.textContent = "Please provide a rating";
            ratingText.className = 'text-red-600 ml-4 font-bold animate-bounce';
            isValid = false;
        }
        
        if (isValid) {
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner animate-spin mr-3"></i>Submitting...';
            submitBtn.disabled = true;
            
            // Simulate submission
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check mr-3"></i>Thank You!';
                submitBtn.classList.remove('eco-gradient');
                submitBtn.classList.add('bg-green-500');
                
                // Show success message
                const successMessage = document.createElement('div');
                successMessage.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-4 rounded-2xl shadow-xl z-50 animate-scale-in';
                successMessage.innerHTML = '<i class="fas fa-check-circle mr-2"></i>Feedback submitted successfully!';
                document.body.appendChild(successMessage);
                
                setTimeout(() => {
                    successMessage.remove();
                    submitBtn.innerHTML = originalText;
                    submitBtn.classList.remove('bg-green-500');
                    submitBtn.classList.add('eco-gradient');
                    submitBtn.disabled = false;
                    form.reset();
                    currentRating = 0;
                    updateStars(0);
                    ratingText.textContent = "Click to rate";
                    ratingText.className = 'text-gray-500 ml-4 font-medium';
                }, 3000);
            }, 2000);
        }
    });
});
</script>
@endsection
