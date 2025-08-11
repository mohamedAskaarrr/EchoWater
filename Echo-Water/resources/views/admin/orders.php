<?php
$title = "Order Management - EchoWater Admin";
ob_start();
?>

<section class="py-8 px-4 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="max-w-7xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Order Management</h1>
            <p class="text-gray-600 dark:text-gray-300">Track and manage all customer orders.</p>
        </div>

        <div class="card">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-semibold">All Orders</h3>
                <div class="flex space-x-2">
                    <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700">
                        <option value="">All Status</option>
                        <option value="pending">Pending</option>
                        <option value="processing">Processing</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th class="text-left py-3">Order ID</th>
                            <th class="text-left py-3">Customer</th>
                            <th class="text-left py-3">Product</th>
                            <th class="text-left py-3">Amount</th>
                            <th class="text-left py-3">Status</th>
                            <th class="text-left py-3">Date</th>
                            <th class="text-left py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order): ?>
                        <tr class="border-b border-gray-100 dark:border-gray-800">
                            <td class="py-3">#<?php echo $order['id']; ?></td>
                            <td class="py-3"><?php echo $order['customer']; ?></td>
                            <td class="py-3"><?php echo $order['product']; ?></td>
                            <td class="py-3">$<?php echo number_format($order['amount'], 2); ?></td>
                            <td class="py-3">
                                <span class="px-2 py-1 text-xs rounded-full 
                                    <?php echo $order['status'] === 'completed' ? 'bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-300' : 
                                             ($order['status'] === 'pending' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/20 dark:text-yellow-300' : 
                                              'bg-blue-100 text-blue-800 dark:bg-blue-900/20 dark:text-blue-300'); ?>">
                                    <?php echo ucfirst($order['status']); ?>
                                </span>
                            </td>
                            <td class="py-3"><?php echo $order['date']; ?></td>
                            <td class="py-3">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">View</button>
                                    <button class="text-green-600 hover:text-green-800 dark:text-green-400 dark:hover:text-green-300">Update</button>
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

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/modern.php';
?>
