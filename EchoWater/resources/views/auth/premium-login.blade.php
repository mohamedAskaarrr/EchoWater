@extends('layouts.premium-app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-white via-blue-50/30 to-purple-50/20 py-12">
    <!-- Background Effects -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-32 w-96 h-96 rounded-full bg-gradient-to-r from-blue-400/10 to-purple-400/10 animate-float"></div>
        <div class="absolute -bottom-40 -left-32 w-96 h-96 rounded-full bg-gradient-to-r from-cyan-400/10 to-blue-400/10 animate-float" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="relative max-w-md w-full mx-6">
        <!-- Main Card -->
        <div class="bg-white/70 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/50 overflow-hidden">
            
            <!-- Header Section -->
            <div class="px-8 pt-8 pb-6 text-center bg-gradient-to-br from-white/80 to-transparent">
                <!-- Logo -->
                <div class="w-20 h-20 mx-auto mb-6 relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl animate-glow opacity-20"></div>
                    <div class="relative w-full h-full bg-white rounded-2xl shadow-lg flex items-center justify-center">
                        <img src="{{ asset('EchoWaterLogo.jpg') }}" alt="EchoWater" class="w-12 h-12 rounded-xl object-cover">
                    </div>
                </div>
                
                <h2 class="font-display text-3xl font-bold text-gray-900 mb-2">Welcome Back</h2>
                <p class="font-body text-gray-600">Sign in to your EchoWater account</p>
            </div>

            <!-- Form Section -->
            <div class="px-8 pb-8">
                <form class="space-y-6">
                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-semibold text-gray-700">
                            Email Address
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-lg"></div>
                            <div class="relative">
                                <input type="email" id="email" name="email" required 
                                       class="input-premium w-full px-4 py-4 pl-12 text-gray-700 placeholder-gray-400 focus:placeholder-gray-300"
                                       placeholder="Enter your email address">
                                <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                    <i class="fas fa-envelope text-gray-400 group-hover:text-blue-500 transition-colors duration-200"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-semibold text-gray-700">
                            Password
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-lg"></div>
                            <div class="relative">
                                <input type="password" id="password" name="password" required 
                                       class="input-premium w-full px-4 py-4 pl-12 pr-12 text-gray-700 placeholder-gray-400 focus:placeholder-gray-300"
                                       placeholder="Enter your password">
                                <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                    <i class="fas fa-lock text-gray-400 group-hover:text-blue-500 transition-colors duration-200"></i>
                                </div>
                                <button type="button" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors duration-200" onclick="togglePassword()">
                                    <i class="fas fa-eye" id="password-toggle"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center group cursor-pointer">
                            <div class="relative">
                                <input type="checkbox" class="sr-only">
                                <div class="w-5 h-5 bg-gray-200 rounded-lg border-2 border-gray-300 transition-all duration-200 group-hover:border-blue-400 flex items-center justify-center">
                                    <i class="fas fa-check text-white text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-200"></i>
                                </div>
                            </div>
                            <span class="ml-3 text-sm font-medium text-gray-700 group-hover:text-gray-900 transition-colors duration-200">Remember me</span>
                        </label>
                        <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700 transition-colors duration-200 relative group">
                            Forgot password?
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full btn-premium eco-gradient text-white py-4 rounded-2xl font-bold text-lg shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-[1.02] relative overflow-hidden group">
                        <span class="relative z-10 flex items-center justify-center">
                            <i class="fas fa-sign-in-alt mr-3 group-hover:animate-bounce"></i>
                            Sign In to EchoWater
                        </span>
                    </button>
                </form>

                <!-- Divider -->
                <div class="mt-8 mb-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-white/80 text-gray-500 font-medium">Or continue with</span>
                        </div>
                    </div>
                </div>

                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-4">
                    <button class="group flex items-center justify-center px-4 py-3 bg-white border-2 border-gray-200 rounded-2xl hover:border-red-300 hover:bg-red-50 transition-all duration-300 transform hover:scale-[1.02]">
                        <i class="fab fa-google text-red-500 mr-2 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="text-sm font-semibold text-gray-700">Google</span>
                    </button>
                    <button class="group flex items-center justify-center px-4 py-3 bg-white border-2 border-gray-200 rounded-2xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-300 transform hover:scale-[1.02]">
                        <i class="fab fa-facebook text-blue-600 mr-2 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="text-sm font-semibold text-gray-700">Facebook</span>
                    </button>
                </div>

                <!-- Sign Up Link -->
                <div class="mt-8 text-center">
                    <p class="font-body text-gray-600">
                        Don't have an account? 
                        <a href="{{ route('signup') }}" class="font-semibold text-blue-600 hover:text-blue-700 transition-colors duration-200 relative group">
                            Create one here
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer Message -->
        <div class="mt-8 text-center">
            <p class="text-sm text-gray-500">
                🔒 Your data is protected with enterprise-grade security
            </p>
        </div>
    </div>
</div>

<script>
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('password-toggle');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}

// Enhanced checkbox functionality
document.addEventListener('DOMContentLoaded', function() {
    const checkbox = document.querySelector('input[type="checkbox"]');
    const checkboxDiv = checkbox.nextElementSibling;
    const checkIcon = checkboxDiv.querySelector('i');
    
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            checkboxDiv.classList.remove('bg-gray-200', 'border-gray-300');
            checkboxDiv.classList.add('bg-blue-500', 'border-blue-500');
            checkIcon.classList.remove('opacity-0');
            checkIcon.classList.add('opacity-100');
        } else {
            checkboxDiv.classList.remove('bg-blue-500', 'border-blue-500');
            checkboxDiv.classList.add('bg-gray-200', 'border-gray-300');
            checkIcon.classList.remove('opacity-100');
            checkIcon.classList.add('opacity-0');
        }
    });
    
    // Form validation with modern styling
    const form = document.querySelector('form');
    const inputs = form.querySelectorAll('input[required]');
    
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.value === '') {
                this.classList.add('border-red-300', 'bg-red-50');
                this.classList.remove('border-blue-400');
            } else {
                this.classList.remove('border-red-300', 'bg-red-50');
            }
        });
        
        input.addEventListener('input', function() {
            if (this.value !== '') {
                this.classList.remove('border-red-300', 'bg-red-50');
            }
        });
    });
});
</script>
@endsection
