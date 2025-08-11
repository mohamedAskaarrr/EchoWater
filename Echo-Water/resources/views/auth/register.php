<?php
$title = "Register - EchoWater";
ob_start();
?>

<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-aqua-50 via-blue-50 to-cyan-100 dark:from-gray-900 dark:via-gray-800 dark:to-blue-900 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Logo and Header -->
        <div class="text-center">
            <div class="flex justify-center mb-6">
                <div class="w-20 h-20 bg-gradient-to-r from-aqua-500 to-cyan-600 rounded-xl flex items-center justify-center">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                </div>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Create Account</h2>
            <p class="mt-2 text-gray-600 dark:text-gray-300">Join EchoWater for pure water solutions</p>
        </div>

        <!-- Registration Form -->
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8">
            <form class="space-y-6" action="/register" method="POST">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Full Name
                    </label>
                    <div class="relative">
                        <input 
                            id="name" 
                            name="name" 
                            type="text" 
                            required 
                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:outline-none focus:ring-2 focus:ring-aqua-500 dark:bg-gray-700 dark:text-white transition-colors"
                            placeholder="Enter your full name"
                            value="<?php echo old('name'); ?>"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                    </div>
                    <?php if (isset($errors) && $errors->has('name')): ?>
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400"><?php echo $errors->first('name'); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Email address
                    </label>
                    <div class="relative">
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            required 
                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:outline-none focus:ring-2 focus:ring-aqua-500 dark:bg-gray-700 dark:text-white transition-colors"
                            placeholder="Enter your email"
                            value="<?php echo old('email'); ?>"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                        </div>
                    </div>
                    <?php if (isset($errors) && $errors->has('email')): ?>
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400"><?php echo $errors->first('email'); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            required 
                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:outline-none focus:ring-2 focus:ring-aqua-500 dark:bg-gray-700 dark:text-white transition-colors"
                            placeholder="Create a password"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                    </div>
                    <?php if (isset($errors) && $errors->has('password')): ?>
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400"><?php echo $errors->first('password'); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Confirm Password
                    </label>
                    <div class="relative">
                        <input 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            type="password" 
                            required 
                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:outline-none focus:ring-2 focus:ring-aqua-500 dark:bg-gray-700 dark:text-white transition-colors"
                            placeholder="Confirm your password"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="flex items-center">
                    <input 
                        id="terms" 
                        name="terms" 
                        type="checkbox" 
                        required
                        class="h-4 w-4 text-aqua-600 focus:ring-aqua-500 border-gray-300 rounded"
                    >
                    <label for="terms" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                        I agree to the 
                        <a href="#" class="text-aqua-600 dark:text-aqua-400 hover:text-aqua-500">Terms and Conditions</a>
                        and 
                        <a href="#" class="text-aqua-600 dark:text-aqua-400 hover:text-aqua-500">Privacy Policy</a>
                    </label>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full btn-primary py-3 text-lg font-medium transition-all hover:scale-105"
                >
                    Create Account
                    <svg class="w-5 h-5 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                </button>
            </form>

            <!-- Divider -->
            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">Or</span>
                    </div>
                </div>
            </div>

            <!-- Login Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Already have an account? 
                    <a href="/login" class="font-medium text-aqua-600 dark:text-aqua-400 hover:text-aqua-500 transition-colors">
                        Sign in here
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .btn-primary {
            background: linear-gradient(to right, #14b8a6, #0891b2);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            box-shadow: 0 10px 25px rgba(20, 184, 166, 0.3);
        }
    </style>
</head>
<body class="antialiased">
    <?php echo $content; ?>
</body>
</html>
