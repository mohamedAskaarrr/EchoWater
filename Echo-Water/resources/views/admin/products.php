<?php
$title = "Product Management - EchoWater Admin";
ob_start();
?>

<section class="py-8 px-4 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="max-w-7xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Product Management</h1>
            <p class="text-gray-600 dark:text-gray-300">Manage your product catalog and inventory.</p>
        </div>

        <div class="card">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-semibold">All Products</h3>
                <button id="addProductBtn" class="btn-primary">Add New Product</button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th class="text-left py-3">ID</th>
                            <th class="text-left py-3">Name</th>
                            <th class="text-left py-3">Category</th>
                            <th class="text-left py-3">Price</th>
                            <th class="text-left py-3">Stock</th>
                            <th class="text-left py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr class="border-b border-gray-100 dark:border-gray-800">
                            <td class="py-3"><?php echo $product['id']; ?></td>
                            <td class="py-3"><?php echo $product['name']; ?></td>
                            <td class="py-3"><?php echo $product['category']; ?></td>
                            <td class="py-3">$<?php echo number_format($product['price'], 2); ?></td>
                            <td class="py-3">
                                <span class="px-2 py-1 text-xs rounded-full 
                                    <?php echo $product['stock'] > 20 ? 'bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-300' : 
                                             ($product['stock'] > 10 ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/20 dark:text-yellow-300' : 
                                              'bg-red-100 text-red-800 dark:bg-red-900/20 dark:text-red-300'); ?>">
                                    <?php echo $product['stock']; ?> units
                                </span>
                            </td>
                            <td class="py-3">
                                <div class="flex space-x-2">
                                    <button onclick="editProduct(<?php echo $product['id']; ?>, '<?php echo addslashes($product['name']); ?>', '<?php echo $product['category']; ?>', <?php echo $product['price']; ?>, <?php echo $product['stock']; ?>)" 
                                            class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">Edit</button>
                                    <button onclick="deleteProduct(<?php echo $product['id']; ?>, '<?php echo addslashes($product['name']); ?>')" 
                                            class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Add Product Modal -->
<div id="addProductModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 w-full max-w-md mx-4">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold dark:text-white">Add New Product</h3>
            <button onclick="closeAddModal()" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <form id="addProductForm" action="/admin/products" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Product Name</label>
                <input type="text" name="name" required 
                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Category</label>
                <select name="category" required 
                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    <option value="">Select Category</option>
                    <option value="Under-sink Systems">Under-sink Systems</option>
                    <option value="Countertop Purifiers">Countertop Purifiers</option>
                    <option value="Whole-house Solutions">Whole-house Solutions</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Price ($)</label>
                <input type="number" name="price" step="0.01" min="0" required 
                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Stock Quantity</label>
                <input type="number" name="stock" min="0" required 
                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Description</label>
                <textarea name="description" rows="3" required 
                          class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"></textarea>
            </div>
            
            <div class="flex justify-end space-x-3">
                <button type="button" onclick="closeAddModal()" 
                        class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Add Product
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Product Modal -->
<div id="editProductModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 w-full max-w-md mx-4">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold dark:text-white">Edit Product</h3>
            <button onclick="closeEditModal()" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <form id="editProductForm" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" id="editProductId" name="product_id">
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Product Name</label>
                <input type="text" id="editProductName" name="name" required 
                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Category</label>
                <select id="editProductCategory" name="category" required 
                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    <option value="Under-sink Systems">Under-sink Systems</option>
                    <option value="Countertop Purifiers">Countertop Purifiers</option>
                    <option value="Whole-house Solutions">Whole-house Solutions</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Price ($)</label>
                <input type="number" id="editProductPrice" name="price" step="0.01" min="0" required 
                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Stock Quantity</label>
                <input type="number" id="editProductStock" name="stock" min="0" required 
                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Description</label>
                <textarea id="editProductDescription" name="description" rows="3" required 
                          class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"></textarea>
            </div>
            
            <div class="flex justify-end space-x-3">
                <button type="button" onclick="closeEditModal()" 
                        class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Update Product
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteProductModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 w-full max-w-md mx-4">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-red-600 dark:text-red-400">Confirm Delete</h3>
            <button onclick="closeDeleteModal()" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <div class="mb-6">
            <p class="text-gray-700 dark:text-gray-300">Are you sure you want to delete the product "<span id="deleteProductName" class="font-semibold"></span>"?</p>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">This action cannot be undone.</p>
        </div>
        
        <form id="deleteProductForm" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
            
            <div class="flex justify-end space-x-3">
                <button type="button" onclick="closeDeleteModal()" 
                        class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                    Delete Product
                </button>
            </div>
        </form>
    </div>
</div>

<script>
// Add Product Modal Functions
function openAddModal() {
    document.getElementById('addProductModal').classList.remove('hidden');
    document.getElementById('addProductModal').classList.add('flex');
}

function closeAddModal() {
    document.getElementById('addProductModal').classList.add('hidden');
    document.getElementById('addProductModal').classList.remove('flex');
    document.getElementById('addProductForm').reset();
}

// Edit Product Modal Functions
function editProduct(id, name, category, price, stock) {
    document.getElementById('editProductId').value = id;
    document.getElementById('editProductName').value = name;
    document.getElementById('editProductCategory').value = category;
    document.getElementById('editProductPrice').value = price;
    document.getElementById('editProductStock').value = stock;
    document.getElementById('editProductForm').action = '/admin/products/' + id;
    
    document.getElementById('editProductModal').classList.remove('hidden');
    document.getElementById('editProductModal').classList.add('flex');
}

function closeEditModal() {
    document.getElementById('editProductModal').classList.add('hidden');
    document.getElementById('editProductModal').classList.remove('flex');
}

// Delete Product Modal Functions
function deleteProduct(id, name) {
    document.getElementById('deleteProductName').textContent = name;
    document.getElementById('deleteProductForm').action = '/admin/products/' + id;
    
    document.getElementById('deleteProductModal').classList.remove('hidden');
    document.getElementById('deleteProductModal').classList.add('flex');
}

function closeDeleteModal() {
    document.getElementById('deleteProductModal').classList.add('hidden');
    document.getElementById('deleteProductModal').classList.remove('flex');
}

// Event Listeners
document.addEventListener('DOMContentLoaded', function() {
    // Add Product Button
    document.getElementById('addProductBtn').addEventListener('click', openAddModal);
    
    // Close modals when clicking outside
    document.getElementById('addProductModal').addEventListener('click', function(e) {
        if (e.target === this) closeAddModal();
    });
    
    document.getElementById('editProductModal').addEventListener('click', function(e) {
        if (e.target === this) closeEditModal();
    });
    
    document.getElementById('deleteProductModal').addEventListener('click', function(e) {
        if (e.target === this) closeDeleteModal();
    });
    
    // Handle form submissions with loading states
    document.getElementById('addProductForm').addEventListener('submit', function() {
        const submitBtn = this.querySelector('button[type="submit"]');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Adding...';
    });
    
    document.getElementById('editProductForm').addEventListener('submit', function() {
        const submitBtn = this.querySelector('button[type="submit"]');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Updating...';
    });
    
    document.getElementById('deleteProductForm').addEventListener('submit', function() {
        const submitBtn = this.querySelector('button[type="submit"]');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Deleting...';
    });
});
</script>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/modern.php';
?>
