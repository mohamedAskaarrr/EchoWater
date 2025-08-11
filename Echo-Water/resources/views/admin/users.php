<?php
$title = "User Management - EchoWater Admin";
ob_start();
?>

<section class="py-8 px-4 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="max-w-7xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">User Management</h1>
            <p class="text-gray-600 dark:text-gray-300">Manage all registered users and their accounts.</p>
        </div>

        <div class="card">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-semibold">All Users</h3>
                <button class="btn-primary">Add New User</button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th class="text-left py-3">ID</th>
                            <th class="text-left py-3">Name</th>
                            <th class="text-left py-3">Email</th>
                            <th class="text-left py-3">Join Date</th>
                            <th class="text-left py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr class="border-b border-gray-100 dark:border-gray-800">
                            <td class="py-3"><?php echo $user['id']; ?></td>
                            <td class="py-3"><?php echo $user['name']; ?></td>
                            <td class="py-3"><?php echo $user['email']; ?></td>
                            <td class="py-3"><?php echo $user['created_at']; ?></td>
                            <td class="py-3">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">Edit</button>
                                    <button class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">Delete</button>
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
