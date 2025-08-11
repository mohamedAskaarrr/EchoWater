<?php
$title = "Products - EchoWater Premium Water Solutions";
ob_start();
?>

<section class="py-20 px-4 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 fade-in-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Our Products</h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                Discover our comprehensive range of premium water purification solutions designed for every need.
            </p>
        </div>

        <div x-data="productCatalog" x-init="init()" class="space-y-8">
            <!-- Filters -->
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 fade-in-up">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-2">Search</label>
                        <input 
                            type="text" 
                            x-model="filters.search" 
                            @input.debounce.300ms="applyFilters()"
                            placeholder="Search products..."
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-500 bg-white dark:bg-gray-700"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Category</label>
                        <select 
                            x-model="filters.category" 
                            @change="applyFilters()"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-500 bg-white dark:bg-gray-700"
                        >
                            <option value="">All Categories</option>
                            <option value="Under-sink Systems">Under-sink Systems</option>
                            <option value="Countertop Purifiers">Countertop Purifiers</option>
                            <option value="Whole-house Solutions">Whole-house Solutions</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Rating</label>
                        <select 
                            x-model="filters.rating" 
                            @change="applyFilters()"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-500 bg-white dark:bg-gray-700"
                        >
                            <option value="0">All Ratings</option>
                            <option value="4">4+ Stars</option>
                            <option value="4.5">4.5+ Stars</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Sort By</label>
                        <select 
                            x-model="sortBy" 
                            @change="applyFilters()"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-500 bg-white dark:bg-gray-700"
                        >
                            <option value="name">Name</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="rating">Rating</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <template x-if="loading">
                    <div class="col-span-full text-center py-12">
                        <div class="animate-spin rounded-full h-12 w-12 border-4 border-aqua-500 border-t-transparent mx-auto mb-4"></div>
                        <p class="text-gray-600 dark:text-gray-400">Loading products...</p>
                    </div>
                </template>

                <template x-for="product in filteredProducts" :key="product.id">
                    <div class="card group hover:shadow-2xl transition-all duration-300">
                        <div class="aspect-w-16 aspect-h-9 mb-4 overflow-hidden rounded-lg bg-gray-100 dark:bg-gray-700">
                            <img 
                                :src="product.image" 
                                :alt="product.name" 
                                class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300"
                                onerror="this.src='/assets/images/placeholder-product.jpg'"
                            >
                        </div>
                        
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="inline-block px-3 py-1 text-xs font-medium bg-aqua-100 dark:bg-aqua-900 text-aqua-800 dark:text-aqua-200 rounded-full" x-text="product.category"></span>
                                <div class="flex items-center">
                                    <div class="flex text-yellow-400">
                                        <template x-for="i in Math.floor(product.rating)">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                        </template>
                                    </div>
                                    <span class="ml-1 text-sm text-gray-500" x-text="product.rating"></span>
                                </div>
                            </div>
                            
                            <h3 class="text-lg font-bold" x-text="product.name"></h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm line-clamp-2" x-text="product.description"></p>
                            
                            <div class="flex items-center justify-between pt-4">
                                <div class="text-xl font-bold text-aqua-600 dark:text-aqua-400" x-text="EchoWater.formatCurrency(product.price)"></div>
                                <div class="space-x-2">
                                    <a :href="'/product?id=' + product.id" class="text-aqua-600 hover:text-aqua-800 text-sm font-medium">View</a>
                                    <button 
                                        @click="$store.cart.addItem(product)" 
                                        class="btn-primary px-3 py-1 text-sm"
                                    >
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <div x-show="filteredProducts.length === 0 && !loading" class="text-center py-12">
                <p class="text-gray-500 dark:text-gray-400">No products found matching your criteria.</p>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include 'layouts/app.php';
?>