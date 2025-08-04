@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-emerald-50 via-white to-teal-50 py-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-32 h-32 bg-emerald-300 rounded-full opacity-20 float-animation"></div>
            <div class="absolute top-40 right-32 w-24 h-24 bg-teal-300 rounded-full opacity-30 float-animation" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-20 h-20 bg-green-300 rounded-full opacity-25 float-animation" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-8 slide-up">
                <div class="w-20 h-20 mx-auto bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center pulse-glow mb-6">
                    <i class="fas fa-comments text-white text-2xl"></i>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Share Your <span class="bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">Feedback</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Help us improve our water solutions and create a better experience for everyone in our community
                </p>
            </div>
        </div>
    </section>

    <!-- Feedback Form Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Success Message -->
            @if(session('success'))
                <div class="mb-8 glass-effect bg-green-50 border-2 border-green-200 rounded-2xl p-6 slide-up">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-lg"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-green-800">Thank you for your feedback!</h3>
                            <p class="text-green-700">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Feedback Form -->
                <div class="animate-on-scroll">
                    <div class="glass-effect bg-white bg-opacity-90 rounded-2xl shadow-2xl border border-white border-opacity-20 p-8 backdrop-blur-sm">
                        <div class="mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-4">Tell Us Your Experience</h2>
                            <p class="text-gray-600">Your feedback helps us deliver better water solutions</p>
                        </div>

                        <form action="{{ route('feedback.store') }}" method="POST" class="space-y-6">
                            @csrf

                            <!-- Name Field -->
                            <div class="space-y-2">
                                <label for="name" class="block text-sm font-semibold text-gray-700">
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-user text-emerald-500"></i>
                                        <span>Your Name</span>
                                    </div>
                                </label>
                                <div class="relative">
                                    <input type="text" id="name" name="name" required 
                                           class="w-full px-4 py-3 pl-12 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-emerald-500 focus:ring-opacity-20 focus:border-emerald-500 transition-all duration-300 bg-white bg-opacity-50"
                                           placeholder="Enter your full name"
                                           value="{{ old('name') }}">
                                    <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                </div>
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600 flex items-center">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="space-y-2">
                                <label for="email" class="block text-sm font-semibold text-gray-700">
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-envelope text-emerald-500"></i>
                                        <span>Email Address</span>
                                    </div>
                                </label>
                                <div class="relative">
                                    <input type="email" id="email" name="email" required 
                                           class="w-full px-4 py-3 pl-12 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-emerald-500 focus:ring-opacity-20 focus:border-emerald-500 transition-all duration-300 bg-white bg-opacity-50"
                                           placeholder="your.email@example.com"
                                           value="{{ old('email') }}">
                                    <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                </div>
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600 flex items-center">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Rating Field -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-star text-emerald-500"></i>
                                        <span>Overall Rating</span>
                                    </div>
                                </label>
                                <div class="flex items-center space-x-2">
                                    <div class="flex space-x-1" id="star-rating">
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
                                    <span id="rating-text" class="text-gray-500 ml-3">Click to rate</span>
                                </div>
                                <input type="hidden" id="rating" name="rating" value="{{ old('rating') }}">
                                @error('rating')
                                    <p class="mt-1 text-sm text-red-600 flex items-center">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Subject Field -->
                            <div class="space-y-2">
                                <label for="subject" class="block text-sm font-semibold text-gray-700">
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-tag text-emerald-500"></i>
                                        <span>Subject</span>
                                    </div>
                                </label>
                                <div class="relative">
                                    <input type="text" id="subject" name="subject" required 
                                           class="w-full px-4 py-3 pl-12 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-emerald-500 focus:ring-opacity-20 focus:border-emerald-500 transition-all duration-300 bg-white bg-opacity-50"
                                           placeholder="Brief subject of your feedback"
                                           value="{{ old('subject') }}">
                                    <i class="fas fa-tag absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                </div>
                                @error('subject')
                                    <p class="mt-1 text-sm text-red-600 flex items-center">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Message Field -->
                            <div class="space-y-2">
                                <label for="message" class="block text-sm font-semibold text-gray-700">
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-comment text-emerald-500"></i>
                                        <span>Your Feedback</span>
                                    </div>
                                </label>
                                <textarea id="message" name="message" required rows="6"
                                          class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-emerald-500 focus:ring-opacity-20 focus:border-emerald-500 transition-all duration-300 bg-white bg-opacity-50 resize-none"
                                          placeholder="Share your detailed feedback, suggestions, or experience with our products...">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-sm text-red-600 flex items-center">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="w-full bg-gradient-to-r from-emerald-500 to-teal-500 text-white py-4 px-6 rounded-xl font-bold text-lg hover:shadow-xl transition-all duration-300 ripple group">
                                <span class="flex items-center justify-center">
                                    <i class="fas fa-paper-plane mr-2"></i>
                                    Send Feedback
                                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Info Panel -->
                <div class="animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="space-y-8">
                        <!-- Contact Info -->
                        <div class="glass-effect bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Get in Touch</h3>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-phone text-white"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900">Phone</p>
                                        <p class="text-gray-600">+1 (555) 123-4567</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-envelope text-white"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900">Email</p>
                                        <p class="text-gray-600">feedback@echowater.com</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-clock text-white"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900">Response Time</p>
                                        <p class="text-gray-600">Within 24 hours</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Why Feedback Matters -->
                        <div class="glass-effect bg-white bg-opacity-50 rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Why Your Feedback Matters</h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <i class="fas fa-lightbulb text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Product Innovation</h4>
                                        <p class="text-gray-600 text-sm">Your insights help us develop better water solutions</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <i class="fas fa-users text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Customer Experience</h4>
                                        <p class="text-gray-600 text-sm">We improve our service based on your experiences</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <i class="fas fa-leaf text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Sustainability</h4>
                                        <p class="text-gray-600 text-sm">Help us create more eco-friendly solutions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    What Our <span class="bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">Customers Say</span>
                </h2>
                <p class="text-xl text-gray-600">Real feedback from our valued customers</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="animate-on-scroll glass-effect bg-white bg-opacity-70 rounded-2xl p-6 hover:shadow-xl transition-all duration-300 scale-hover">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="ml-2 text-gray-600 font-medium">5.0</span>
                    </div>
                    <p class="text-gray-700 mb-4 italic">"The EchoWater machine has completely transformed our home's water quality. Crystal clear and tastes amazing!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-semibold">S</span>
                        </div>
                        <div class="ml-3">
                            <p class="font-semibold text-gray-900">Sarah Johnson</p>
                            <p class="text-gray-600 text-sm">Verified Customer</p>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="animate-on-scroll glass-effect bg-white bg-opacity-70 rounded-2xl p-6 hover:shadow-xl transition-all duration-300 scale-hover" style="animation-delay: 0.1s;">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="ml-2 text-gray-600 font-medium">5.0</span>
                    </div>
                    <p class="text-gray-700 mb-4 italic">"Excellent customer service and the fastest delivery I've ever experienced. Highly recommend EchoWater!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-semibold">M</span>
                        </div>
                        <div class="ml-3">
                            <p class="font-semibold text-gray-900">Mike Chen</p>
                            <p class="text-gray-600 text-sm">Verified Customer</p>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="animate-on-scroll glass-effect bg-white bg-opacity-70 rounded-2xl p-6 hover:shadow-xl transition-all duration-300 scale-hover" style="animation-delay: 0.2s;">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="ml-2 text-gray-600 font-medium">5.0</span>
                    </div>
                    <p class="text-gray-700 mb-4 italic">"Love the eco-friendly approach and the smart features. It's the future of home water systems!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-semibold">E</span>
                        </div>
                        <div class="ml-3">
                            <p class="font-semibold text-gray-900">Emily Davis</p>
                            <p class="text-gray-600 text-sm">Verified Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- JavaScript for Star Rating -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.star');
        const ratingInput = document.getElementById('rating');
        const ratingText = document.getElementById('rating-text');
        
        const ratingTexts = {
            1: 'Poor',
            2: 'Fair', 
            3: 'Good',
            4: 'Very Good',
            5: 'Excellent'
        };
        
        stars.forEach(star => {
            star.addEventListener('click', function(e) {
                e.preventDefault();
                const rating = this.getAttribute('data-rating');
                ratingInput.value = rating;
                ratingText.textContent = ratingTexts[rating];
                
                // Update star colors
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.remove('text-gray-300');
                        s.classList.add('text-yellow-400');
                    } else {
                        s.classList.remove('text-yellow-400');
                        s.classList.add('text-gray-300');
                    }
                });
            });
            
            star.addEventListener('mouseenter', function() {
                const rating = this.getAttribute('data-rating');
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.remove('text-gray-300');
                        s.classList.add('text-yellow-400');
                    } else {
                        s.classList.remove('text-yellow-400');
                        s.classList.add('text-gray-300');
                    }
                });
            });
        });
        
        // Reset on mouse leave
        document.getElementById('star-rating').addEventListener('mouseleave', function() {
            const currentRating = ratingInput.value;
            stars.forEach((s, index) => {
                if (index < currentRating) {
                    s.classList.remove('text-gray-300');
                    s.classList.add('text-yellow-400');
                } else {
                    s.classList.remove('text-yellow-400');
                    s.classList.add('text-gray-300');
                }
            });
        });
    });
</script>
@endsection
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white">Your Feedback Matters</h3>
                        <p class="text-green-100 text-sm">We'd love to hear from you</p>
                    </div>
                </div>
            </div>

            <!-- Feedback Form -->
            <form action="{{ route('feedback.store') }}" method="POST" class="p-6 space-y-6">
                @csrf
                
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Your Name</span>
                        </div>
                    </label>
                    <input type="text" id="name" name="name" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-colors duration-200"
                           placeholder="Enter your full name">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>Email Address</span>
                        </div>
                    </label>
                    <input type="email" id="email" name="email" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-colors duration-200"
                           placeholder="your.email@example.com">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Rating Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                            <span>How would you rate your experience?</span>
                        </div>
                    </label>
                    <div class="flex justify-center space-x-4">
                        @for($i = 1; $i <= 5; $i++)
                            <label class="cursor-pointer group">
                                <input type="radio" name="rating" value="{{ $i }}" class="sr-only">
                                <div class="w-12 h-12 rounded-full border-2 border-gray-300 flex items-center justify-center text-2xl transition-all duration-200 group-hover:scale-110 hover:border-yellow-400 hover:bg-yellow-50 rating-option" data-rating="{{ $i }}">
                                    @switch($i)
                                        @case(1)
                                            😞
                                            @break
                                        @case(2)
                                            😕
                                            @break
                                        @case(3)
                                            😐
                                            @break
                                        @case(4)
                                            🙂
                                            @break
                                        @case(5)
                                            😄
                                            @break
                                    @endswitch
                                </div>
                            </label>
                        @endfor
                    </div>
                    <div class="flex justify-between text-xs text-gray-500 mt-2">
                        <span>Poor</span>
                        <span>Excellent</span>
                    </div>
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            <span>Your Message</span>
                        </div>
                    </label>
                    <textarea id="message" name="message" required rows="5" 
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-colors duration-200 resize-none"
                              placeholder="Tell us about your experience, suggestions, or any issues you encountered..."></textarea>
                    @error('message')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-green-500 to-emerald-600 text-white py-3 px-6 rounded-lg font-medium hover:from-green-600 hover:to-emerald-700 focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105">
                        <div class="flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            <span>Send Feedback</span>
                        </div>
                    </button>
                </div>
            </form>
        </div>

        <!-- Additional Info -->
        <div class="mt-8 text-center">
            <p class="text-gray-600 text-sm">
                Your feedback helps us improve our water solutions and create a better experience for everyone.
            </p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Rating selection functionality
    const ratingOptions = document.querySelectorAll('.rating-option');
    
    ratingOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Remove active state from all options
            ratingOptions.forEach(opt => {
                opt.classList.remove('border-yellow-400', 'bg-yellow-50');
                opt.classList.add('border-gray-300');
            });
            
            // Add active state to clicked option
            this.classList.remove('border-gray-300');
            this.classList.add('border-yellow-400', 'bg-yellow-50');
            
            // Check the radio button
            const radio = this.parentElement.querySelector('input[type="radio"]');
            radio.checked = true;
        });
    });
});
</script>

<style>
.rating-option.selected {
    border-color: #fbbf24;
    background-color: #fef3c7;
}
</style>
@endsection 