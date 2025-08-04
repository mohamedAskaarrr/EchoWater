@extends('layouts.premium-app')

@section('content')
<!-- Profile Hero Section -->
<section class="relative bg-gradient-to-br from-white via-blue-50/30 to-purple-50/20 py-20">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_80%,rgba(14,165,233,0.05),transparent_50%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_20%,rgba(139,92,246,0.05),transparent_50%)]"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="font-display text-5xl md:text-6xl font-bold text-gray-900 mb-6 animate-slide-up">
                My <span class="gradient-text">Profile</span>
            </h1>
            <p class="font-body text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed animate-slide-up" style="animation-delay: 0.2s;">
                Manage your account settings and preferences
            </p>
        </div>
    </div>
</section>

<!-- Profile Content Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-blue-50/30">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Profile Card -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden animate-slide-up">
                    <!-- Profile Header -->
                    <div class="relative h-32 bg-gradient-to-br from-blue-500 to-purple-600">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute -bottom-16 left-1/2 transform -translate-x-1/2">
                            <div class="relative">
                                <div class="w-32 h-32 bg-white rounded-full p-2 shadow-xl">
                                    <div class="w-full h-full bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-user text-white text-4xl"></i>
                                    </div>
                                </div>
                                <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-green-500 rounded-full border-4 border-white flex items-center justify-center">
                                    <i class="fas fa-check text-white text-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Profile Info -->
                    <div class="pt-20 pb-8 px-8 text-center">
                        <h2 class="font-display text-2xl font-bold text-gray-900 mb-2">Mohamed Ibrahim</h2>
                        <p class="text-gray-600 mb-4">Premium Member</p>
                        
                        <!-- Status Badge -->
                        <div class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                            <div class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></div>
                            Active Account
                        </div>
                        
                        <!-- Quick Stats -->
                        <div class="grid grid-cols-2 gap-4 pt-6 border-t border-gray-100">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600 mb-1">5</div>
                                <div class="text-sm text-gray-600">Orders</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-purple-600 mb-1">2</div>
                                <div class="text-sm text-gray-600">Reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Account Actions -->
                <div class="mt-6 bg-white rounded-3xl shadow-lg border border-gray-100 p-6 animate-slide-up" style="animation-delay: 0.2s;">
                    <h3 class="font-display text-lg font-bold text-gray-900 mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <button class="w-full flex items-center justify-between p-3 text-left bg-gray-50 hover:bg-blue-50 rounded-xl transition-colors duration-200 group">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-blue-200 transition-colors duration-200">
                                    <i class="fas fa-shopping-bag text-blue-600"></i>
                                </div>
                                <span class="font-medium text-gray-700">My Orders</span>
                            </div>
                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-600 transition-colors duration-200"></i>
                        </button>
                        
                        <button class="w-full flex items-center justify-between p-3 text-left bg-gray-50 hover:bg-purple-50 rounded-xl transition-colors duration-200 group">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center group-hover:bg-purple-200 transition-colors duration-200">
                                    <i class="fas fa-heart text-purple-600"></i>
                                </div>
                                <span class="font-medium text-gray-700">Wishlist</span>
                            </div>
                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-600 transition-colors duration-200"></i>
                        </button>
                        
                        <button class="w-full flex items-center justify-between p-3 text-left bg-gray-50 hover:bg-green-50 rounded-xl transition-colors duration-200 group">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center group-hover:bg-green-200 transition-colors duration-200">
                                    <i class="fas fa-headset text-green-600"></i>
                                </div>
                                <span class="font-medium text-gray-700">Support</span>
                            </div>
                            <i class="fas fa-chevron-right text-gray-400 group-hover:text-green-600 transition-colors duration-200"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Profile Details -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Personal Information -->
                <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 animate-slide-up" style="animation-delay: 0.3s;">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-display text-2xl font-bold text-gray-900">Personal Information</h3>
                        <button class="btn-premium eco-gradient text-white px-6 py-2 rounded-xl font-semibold text-sm hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-edit mr-2"></i>
                            Edit Profile
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Full Name -->
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-gray-700">Full Name</label>
                            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-user text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Mohamed Ibrahim</div>
                                    <div class="text-sm text-gray-500">Full Name</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Age -->
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-gray-700">Age</label>
                            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-calendar text-purple-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">20 Years Old</div>
                                    <div class="text-sm text-gray-500">Age</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-gray-700">Email Address</label>
                            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-envelope text-green-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">mohammed@gmail.com</div>
                                    <div class="text-sm text-gray-500">Primary Email</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-gray-700">Phone Number</label>
                            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-phone text-orange-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">+201148940285</div>
                                    <div class="text-sm text-gray-500">Mobile Number</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Account Security -->
                <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 animate-slide-up" style="animation-delay: 0.4s;">
                    <h3 class="font-display text-2xl font-bold text-gray-900 mb-6">Account Security</h3>
                    
                    <div class="space-y-4">
                        <!-- Password -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-lock text-red-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Password</div>
                                    <div class="text-sm text-gray-500">Last updated 2 months ago</div>
                                </div>
                            </div>
                            <button class="text-blue-600 hover:text-blue-700 font-semibold text-sm">Change</button>
                        </div>
                        
                        <!-- Two-Factor Authentication -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-shield-alt text-green-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Two-Factor Authentication</div>
                                    <div class="text-sm text-gray-500">Enabled via SMS</div>
                                </div>
                            </div>
                            <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                Enabled
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Preferences -->
                <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 animate-slide-up" style="animation-delay: 0.5s;">
                    <h3 class="font-display text-2xl font-bold text-gray-900 mb-6">Preferences</h3>
                    
                    <div class="space-y-6">
                        <!-- Notifications -->
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Notifications</h4>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-bell text-blue-600"></i>
                                        <span class="text-gray-700">Email Notifications</span>
                                    </div>
                                    <div class="relative">
                                        <input type="checkbox" checked class="sr-only">
                                        <div class="w-10 h-6 bg-blue-600 rounded-full shadow-inner"></div>
                                        <div class="absolute w-4 h-4 bg-white rounded-full shadow transition-transform duration-300 ease-in-out top-1 right-1"></div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-mobile-alt text-purple-600"></i>
                                        <span class="text-gray-700">SMS Notifications</span>
                                    </div>
                                    <div class="relative">
                                        <input type="checkbox" class="sr-only">
                                        <div class="w-10 h-6 bg-gray-300 rounded-full shadow-inner"></div>
                                        <div class="absolute w-4 h-4 bg-white rounded-full shadow transition-transform duration-300 ease-in-out top-1 left-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Language -->
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Language</h4>
                            <select class="w-full p-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400">
                                <option>English (US)</option>
                                <option>العربية</option>
                                <option>Français</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions Section -->
<section class="py-16 bg-gradient-to-br from-blue-900 to-purple-900">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="font-display text-4xl font-bold text-white mb-4">
                Account <span class="text-cyan-400">Overview</span>
            </h2>
            <p class="font-body text-xl text-blue-100 max-w-3xl mx-auto">
                Your account statistics and recent activity
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-16 h-16 bg-cyan-500/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-cyan-500/30 transition-colors duration-300">
                    <i class="fas fa-shopping-cart text-2xl text-cyan-400"></i>
                </div>
                <h3 class="font-semibold text-lg mb-2 text-white">Total Orders</h3>
                <p class="text-cyan-100 text-sm">5 Orders Completed</p>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 bg-green-500/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500/30 transition-colors duration-300">
                    <i class="fas fa-wallet text-2xl text-green-400"></i>
                </div>
                <h3 class="font-semibold text-lg mb-2 text-white">Total Spent</h3>
                <p class="text-green-100 text-sm">165,000 EGP</p>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 bg-yellow-500/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-500/30 transition-colors duration-300">
                    <i class="fas fa-star text-2xl text-yellow-400"></i>
                </div>
                <h3 class="font-semibold text-lg mb-2 text-white">Loyalty Points</h3>
                <p class="text-yellow-100 text-sm">1,250 Points</p>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 bg-purple-500/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-500/30 transition-colors duration-300">
                    <i class="fas fa-calendar text-2xl text-purple-400"></i>
                </div>
                <h3 class="font-semibold text-lg mb-2 text-white">Member Since</h3>
                <p class="text-purple-100 text-sm">January 2024</p>
            </div>
        </div>
    </div>
</section>
@endsection
