<?php
$title = $product['name'] . " - EchoWater Products";
ob_start();
?>

<section class="py-8 px-4 bg-white dark:bg-gray-900 min-h-screen">
    <div class="max-w-6xl mx-auto">
        <!-- Back Button -->
        <div class="mb-6">
            <a href="/products" class="inline-flex items-center text-aqua-600 dark:text-aqua-400 hover:text-aqua-700 dark:hover:text-aqua-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Products
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Image -->
            <div class="space-y-4">
                <div class="aspect-square bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden">
                    <img 
                        src="<?php echo $product['image']; ?>" 
                        alt="<?php echo $product['name']; ?>"
                        class="w-full h-full object-cover"
                        onerror="this.src='https://via.placeholder.com/600x600/f3f4f6/9ca3af?text=<?php echo urlencode($product['name']); ?>'"
                    >
                </div>
            </div>

            <!-- Product Details -->
            <div class="space-y-6">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold mb-2"><?php echo $product['name']; ?></h1>
                    <p class="text-lg text-gray-600 dark:text-gray-400"><?php echo $product['category']; ?></p>
                </div>

                <!-- Rating -->
                <div class="flex items-center space-x-2">
                    <div class="flex items-center">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <svg class="w-5 h-5 <?php echo $i <= floor($product['rating']) ? 'text-yellow-400' : 'text-gray-300'; ?>" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <span class="text-gray-600 dark:text-gray-400"><?php echo $product['rating']; ?> stars</span>
                </div>

                <!-- Price -->
                <div class="text-3xl font-bold text-aqua-600 dark:text-aqua-400">
                    $<?php echo number_format($product['price'], 2); ?>
                </div>

                <!-- Description -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Description</h3>
                    <p class="text-gray-600 dark:text-gray-400"><?php echo $product['description']; ?></p>
                </div>

                <!-- Features -->
                <div>
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

                <!-- Specifications -->
                <?php if (isset($product['specifications'])): ?>
                <div>
                    <h3 class="text-lg font-semibold mb-3">Specifications</h3>
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4">
                        <dl class="space-y-2">
                            <?php foreach ($product['specifications'] as $spec => $value): ?>
                            <div class="flex justify-between">
                                <dt class="text-gray-600 dark:text-gray-400"><?php echo $spec; ?>:</dt>
                                <dd class="font-medium"><?php echo $value; ?></dd>
                            </div>
                            <?php endforeach; ?>
                        </dl>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Actions -->
                <div class="space-y-3">
                    <button class="w-full btn-primary py-4 text-lg">
                        Add to Cart
                    </button>
                    <button class="w-full border-2 border-aqua-600 text-aqua-600 dark:border-aqua-400 dark:text-aqua-400 hover:bg-aqua-50 dark:hover:bg-aqua-900/20 px-6 py-4 rounded-xl font-semibold transition-colors">
                        Request Quote
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/modern.php';
?>
