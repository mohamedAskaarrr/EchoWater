<?php
$title = "Product Detail - EchoWater";
ob_start();
?>

<section class="py-8 px-4 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="max-w-7xl mx-auto">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <ol class="flex items-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
                <li><a href="/products" class="hover:text-aqua-600 dark:hover:text-aqua-400">Products</a></li>
                <li>
                    <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </li>
                <li class="text-gray-900 dark:text-white"><?php echo $product['name']; ?></li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Product Image -->
            <div class="card">
                <div class="aspect-square bg-gradient-to-br from-aqua-100 to-cyan-200 dark:from-aqua-900 dark:to-cyan-800 rounded-xl flex items-center justify-center">
                    <svg class="w-32 h-32 text-aqua-600 dark:text-aqua-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2v13m0 0L8 11m4 4l4-4"/>
                        <circle cx="12" cy="12" r="3" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>

            <!-- Product Details -->
            <div>
                <div class="mb-6">
                    <span class="inline-block px-3 py-1 text-xs bg-aqua-100 text-aqua-800 dark:bg-aqua-900/20 dark:text-aqua-300 rounded-full mb-2">
                        <?php echo $product['category']; ?>
                    </span>
                    <h1 class="text-3xl md:text-4xl font-bold mb-4"><?php echo $product['name']; ?></h1>
                    
                    <!-- Rating -->
                    <div class="flex items-center mb-4">
                        <div class="flex items-center">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <svg class="w-5 h-5 <?php echo $i <= floor($product['rating']) ? 'text-yellow-400' : 'text-gray-300'; ?>" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            <?php endfor; ?>
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400"><?php echo $product['rating']; ?> (24 reviews)</span>
                        </div>
                    </div>

                    <p class="text-gray-600 dark:text-gray-300 mb-6"><?php echo $product['description']; ?></p>
                    
                    <!-- Price -->
                    <div class="mb-6">
                        <span class="text-3xl font-bold text-aqua-600 dark:text-aqua-400">$<?php echo number_format($product['price'], 2); ?></span>
                    </div>

                    <!-- Features -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-3">Key Features</h3>
                        <ul class="space-y-2">
                            <?php foreach ($product['features'] as $feature): ?>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <?php echo $feature; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Actions -->
                    <div class="flex space-x-4">
                        <button class="btn-primary flex-1">
                            Add to Cart
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l4.5-6m0 0V4a2 2 0 114 0v3m-4 0h4"/>
                            </svg>
                        </button>
                        <button class="px-6 py-3 border border-gray-300 dark:border-gray-600 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Specifications -->
        <div class="mt-12">
            <div class="card">
                <h3 class="text-xl font-semibold mb-6">Specifications</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php foreach ($product['specifications'] as $spec => $value): ?>
                    <div class="flex justify-between py-2 border-b border-gray-200 dark:border-gray-700 last:border-b-0">
                        <span class="font-medium"><?php echo $spec; ?></span>
                        <span class="text-gray-600 dark:text-gray-400"><?php echo $value; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/modern.php';
?>
