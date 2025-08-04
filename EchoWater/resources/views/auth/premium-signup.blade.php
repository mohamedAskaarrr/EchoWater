@extends('layouts.premium-app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-white via-blue-50/30 to-purple-50/20 py-12">
    <!-- Background Effects -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-32 w-96 h-96 rounded-full bg-gradient-to-r from-purple-400/10 to-pink-400/10 animate-float"></div>
        <div class="absolute -bottom-40 -left-32 w-96 h-96 rounded-full bg-gradient-to-r from-cyan-400/10 to-blue-400/10 animate-float" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="relative max-w-lg w-full mx-6">
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
                
                <h2 class="font-display text-3xl font-bold text-gray-900 mb-2">Join EchoWater</h2>
                <p class="font-body text-gray-600">Create your account and start your pure water journey</p>
            </div>

            <!-- Form Section -->
            <div class="px-8 pb-8">
                <form class="space-y-6">
                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label for="first_name" class="block text-sm font-semibold text-gray-700">
                                First Name
                            </label>
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-lg"></div>
                                <div class="relative">
                                    <input type="text" id="first_name" name="first_name" required 
                                           class="input-premium w-full px-4 py-4 pl-12 text-gray-700 placeholder-gray-400 focus:placeholder-gray-300"
                                           placeholder="First name">
                                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                        <i class="fas fa-user text-gray-400 group-hover:text-blue-500 transition-colors duration-200"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-2">
                            <label for="last_name" class="block text-sm font-semibold text-gray-700">
                                Last Name
                            </label>
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-lg"></div>
                                <div class="relative">
                                    <input type="text" id="last_name" name="last_name" required 
                                           class="input-premium w-full px-4 py-4 pl-12 text-gray-700 placeholder-gray-400 focus:placeholder-gray-300"
                                           placeholder="Last name">
                                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                        <i class="fas fa-user text-gray-400 group-hover:text-blue-500 transition-colors duration-200"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                       placeholder="Create a strong password">
                                <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                    <i class="fas fa-lock text-gray-400 group-hover:text-blue-500 transition-colors duration-200"></i>
                                </div>
                                <button type="button" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors duration-200" onclick="togglePassword('password')">
                                    <i class="fas fa-eye" id="password-toggle"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Password Strength Indicator -->
                        <div class="flex space-x-1 mt-2">
                            <div class="h-1 flex-1 bg-gray-200 rounded-full">
                                <div class="h-1 bg-red-500 rounded-full transition-all duration-300" id="strength-bar" style="width: 0%"></div>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500" id="strength-text">Password strength: Weak</p>
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="space-y-2">
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700">
                            Confirm Password
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-lg"></div>
                            <div class="relative">
                                <input type="password" id="password_confirmation" name="password_confirmation" required 
                                       class="input-premium w-full px-4 py-4 pl-12 pr-12 text-gray-700 placeholder-gray-400 focus:placeholder-gray-300"
                                       placeholder="Confirm your password">
                                <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                    <i class="fas fa-lock text-gray-400 group-hover:text-blue-500 transition-colors duration-200"></i>
                                </div>
                                <button type="button" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors duration-200" onclick="togglePassword('password_confirmation')">
                                    <i class="fas fa-eye" id="password_confirmation-toggle"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Terms & Privacy -->
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <input type="checkbox" id="terms" name="terms" required class="sr-only">
                            <div class="checkbox-custom w-5 h-5 bg-gray-200 rounded-lg border-2 border-gray-300 flex items-center justify-center cursor-pointer transition-all duration-200 mt-0.5">
                                <i class="fas fa-check text-white text-xs opacity-0"></i>
                            </div>
                            <label for="terms" class="ml-3 text-sm font-medium text-gray-700 cursor-pointer leading-relaxed">
                                I agree to the <a href="#" class="text-blue-600 hover:text-blue-700 underline">Terms of Service</a> and <a href="#" class="text-blue-600 hover:text-blue-700 underline">Privacy Policy</a>
                            </label>
                        </div>
                        
                        <div class="flex items-start">
                            <input type="checkbox" id="newsletter" name="newsletter" class="sr-only">
                            <div class="checkbox-custom w-5 h-5 bg-gray-200 rounded-lg border-2 border-gray-300 flex items-center justify-center cursor-pointer transition-all duration-200 mt-0.5">
                                <i class="fas fa-check text-white text-xs opacity-0"></i>
                            </div>
                            <label for="newsletter" class="ml-3 text-sm font-medium text-gray-700 cursor-pointer leading-relaxed">
                                Subscribe to our newsletter for product updates and exclusive offers
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full btn-premium eco-gradient text-white py-4 rounded-2xl font-bold text-lg shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-[1.02] relative overflow-hidden group">
                        <span class="relative z-10 flex items-center justify-center">
                            <i class="fas fa-user-plus mr-3 group-hover:animate-bounce"></i>
                            Create EchoWater Account
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
                            <span class="px-4 bg-white/80 text-gray-500 font-medium">Or sign up with</span>
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

                <!-- Sign In Link -->
                <div class="mt-8 text-center">
                    <p class="font-body text-gray-600">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="font-semibold text-blue-600 hover:text-blue-700 transition-colors duration-200 relative group">
                            Sign in here
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
function togglePassword(fieldId) {
    const passwordInput = document.getElementById(fieldId);
    const toggleIcon = document.getElementById(fieldId + '-toggle');
    
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

// Enhanced functionality
document.addEventListener('DOMContentLoaded', function() {
    // Password strength checker
    const passwordInput = document.getElementById('password');
    const strengthBar = document.getElementById('strength-bar');
    const strengthText = document.getElementById('strength-text');
    
    passwordInput.addEventListener('input', function() {
        const password = this.value;
        const strength = calculatePasswordStrength(password);
        updatePasswordStrength(strength);
    });
    
    function calculatePasswordStrength(password) {
        let score = 0;
        
        if (password.length >= 8) score++;
        if (password.match(/[a-z]/)) score++;
        if (password.match(/[A-Z]/)) score++;
        if (password.match(/[0-9]/)) score++;
        if (password.match(/[^a-zA-Z0-9]/)) score++;
        
        return score;
    }
    
    function updatePasswordStrength(strength) {
        const strengths = [
            { width: '0%', color: 'bg-gray-300', text: 'No password' },
            { width: '20%', color: 'bg-red-500', text: 'Very weak' },
            { width: '40%', color: 'bg-orange-500', text: 'Weak' },
            { width: '60%', color: 'bg-yellow-500', text: 'Good' },
            { width: '80%', color: 'bg-blue-500', text: 'Strong' },
            { width: '100%', color: 'bg-green-500', text: 'Very strong' }
        ];
        
        const current = strengths[strength];
        strengthBar.style.width = current.width;
        strengthBar.className = `h-1 rounded-full transition-all duration-300 ${current.color}`;
        strengthText.textContent = `Password strength: ${current.text}`;
        strengthText.className = `text-xs ${current.color.replace('bg-', 'text-')}`;
    }
    
    // Enhanced checkbox functionality
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
    
    // Form validation with visual feedback
    const form = document.querySelector('form');
    const inputs = form.querySelectorAll('input[required]');
    
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            if (this.value !== '') {
                this.classList.remove('border-red-300', 'bg-red-50');
                if (this.type === 'email' && isValidEmail(this.value)) {
                    this.classList.add('border-green-300', 'bg-green-50');
                } else if (this.type !== 'email') {
                    this.classList.add('border-green-300', 'bg-green-50');
                }
            }
        });
    });
    
    // Password confirmation validation
    const confirmPassword = document.getElementById('password_confirmation');
    confirmPassword.addEventListener('input', function() {
        if (this.value === passwordInput.value && this.value !== '') {
            this.classList.remove('border-red-300', 'bg-red-50');
            this.classList.add('border-green-300', 'bg-green-50');
        } else if (this.value !== '') {
            this.classList.remove('border-green-300', 'bg-green-50');
            this.classList.add('border-red-300', 'bg-red-50');
        }
    });
    
    function validateField(field) {
        if (field.value === '') {
            field.classList.add('border-red-300', 'bg-red-50');
            field.classList.remove('border-green-300', 'bg-green-50');
            return false;
        } else if (field.type === 'email' && !isValidEmail(field.value)) {
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
    
    // Form submission with success animation
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        inputs.forEach(input => {
            if (!validateField(input)) {
                isValid = false;
            }
        });
        
        // Check password confirmation
        if (confirmPassword.value !== passwordInput.value) {
            confirmPassword.classList.add('border-red-300', 'bg-red-50');
            isValid = false;
        }
        
        // Check terms agreement
        const termsCheckbox = document.getElementById('terms');
        if (!termsCheckbox.checked) {
            termsCheckbox.nextElementSibling.classList.add('border-red-300');
            isValid = false;
        }
        
        if (isValid) {
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner animate-spin mr-3"></i>Creating Account...';
            submitBtn.disabled = true;
            
            // Simulate submission
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check mr-3"></i>Account Created!';
                submitBtn.classList.remove('eco-gradient');
                submitBtn.classList.add('bg-green-500');
                
                // Show success message
                const successMessage = document.createElement('div');
                successMessage.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-4 rounded-2xl shadow-xl z-50 animate-scale-in';
                successMessage.innerHTML = '<i class="fas fa-check-circle mr-2"></i>Welcome to EchoWater!';
                document.body.appendChild(successMessage);
                
                setTimeout(() => {
                    window.location.href = '/';
                }, 2000);
            }, 2000);
        }
    });
});
</script>
@endsection
