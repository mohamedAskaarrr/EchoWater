<?php
$title = "Login - EchoWater";
ob_start();
?>

<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-aqua-50 via-blue-50 to-cyan-100 dark:from-gray-900 dark:via-gray-800 dark:to-blue-900 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Logo and Header -->
        <div class="text-center">
            <div class="flex justify-center mb-6">
                <div class="w-20 h-20 bg-gradient-to-r from-aqua-500 to-cyan-600 rounded-xl flex items-center justify-center">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Welcome back!</h2>
            <p class="mt-2 text-gray-600 dark:text-gray-300">Sign in to your EchoWater account</p>
        </div>

        <!-- Login Form -->
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8">
            <form class="space-y-6" action="/login" method="POST">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                
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
                            placeholder="Enter your password"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                    </div>
                    <?php if (isset($errors) && $errors->has('password')): ?>
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400"><?php echo $errors->first('password'); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input 
                            id="remember" 
                            name="remember" 
                            type="checkbox" 
                            class="h-4 w-4 text-aqua-600 focus:ring-aqua-500 border-gray-300 rounded"
                        >
                        <label for="remember" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="text-sm text-aqua-600 dark:text-aqua-400 hover:text-aqua-500">
                        Forgot password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full btn-primary py-3 text-lg font-medium transition-all hover:scale-105"
                >
                    Sign in
                    <svg class="w-5 h-5 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
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

            <!-- Register Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Don't have an account? 
                    <a href="/register" class="font-medium text-aqua-600 dark:text-aqua-400 hover:text-aqua-500 transition-colors">
                        Sign up now
                    </a>
                </p>
            </div>
        </div>

        <!-- Demo Credentials -->
        <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-xl p-4">
            <h3 class="text-sm font-medium text-blue-800 dark:text-blue-300 mb-2">Demo Credentials</h3>
            <div class="text-xs text-blue-600 dark:text-blue-400 space-y-1">
                <div><strong>Admin:</strong> admin@echowater.com / password123</div>
                <div><strong>User:</strong> user@echowater.com / password123</div>
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
