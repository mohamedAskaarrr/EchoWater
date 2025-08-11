-- EchoWater Database Setup SQL
-- Run these commands in phpMyAdmin to set up your database

-- 1. Users table (Laravel default structure)
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 2. Spatie Laravel Permission tables
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`, `guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`, `guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`, `model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`, `model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 3. Products table
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `rating` decimal(3,1) DEFAULT 0.0,
  `image` varchar(255) DEFAULT NULL,
  `features` json DEFAULT NULL,
  `specifications` json DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 4. Orders table
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `total_amount` decimal(10,2) NOT NULL,
  `status` enum('pending','processing','completed','cancelled') DEFAULT 'pending',
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `shipping_address` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_product_id_foreign` (`product_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 5. Water Quality Data table (for dashboard)
CREATE TABLE IF NOT EXISTS `water_quality_data` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `tds_level` decimal(5,2) DEFAULT NULL,
  `ph_level` decimal(3,1) DEFAULT NULL,
  `chlorine_level` decimal(5,2) DEFAULT NULL,
  `temperature` decimal(4,1) DEFAULT NULL,
  `flow_rate` decimal(5,2) DEFAULT NULL,
  `filter_health` int(3) DEFAULT NULL,
  `recorded_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `water_quality_data_user_id_foreign` (`user_id`),
  CONSTRAINT `water_quality_data_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 6. Insert default roles
INSERT INTO `roles` (`name`, `guard_name`, `created_at`, `updated_at`) VALUES
('admin', 'web', NOW(), NOW()),
('user', 'web', NOW(), NOW());

-- 7. Insert sample permissions
INSERT INTO `permissions` (`name`, `guard_name`, `created_at`, `updated_at`) VALUES
('manage users', 'web', NOW(), NOW()),
('manage products', 'web', NOW(), NOW()),
('manage orders', 'web', NOW(), NOW()),
('view dashboard', 'web', NOW(), NOW()),
('view products', 'web', NOW(), NOW());

-- 8. Assign permissions to admin role
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1), -- manage users to admin
(2, 1), -- manage products to admin
(3, 1), -- manage orders to admin
(4, 1), -- view dashboard to admin
(5, 1); -- view products to admin

-- 9. Assign basic permissions to user role
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(4, 2), -- view dashboard to user
(5, 2); -- view products to user

-- 10. Insert sample admin user (password: password123)
INSERT INTO `users` (`name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
('Admin User', 'admin@echowater.com', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW()),
('Demo User', 'user@echowater.com', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW());

-- 11. Assign roles to users
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1), -- Admin role to first user
(2, 'App\\Models\\User', 2); -- User role to second user

-- 12. Insert sample products
INSERT INTO `products` (`name`, `description`, `price`, `category`, `stock`, `rating`, `features`, `specifications`, `status`, `created_at`, `updated_at`) VALUES
('EchoMax Pro', '7-stage advanced filtration system with smart monitoring capabilities for premium water quality.', 599.99, 'Under-sink Systems', 25, 4.8, 
'["Smart IoT monitoring", "7-stage filtration", "UV sterilization", "Real-time alerts", "Mobile app control"]',
'{"Flow Rate": "2.5 GPM", "Filter Life": "12 months", "Dimensions": "14\\" x 5\\" x 16\\"", "Warranty": "3 years", "Power": "24V DC"}',
'active', NOW(), NOW()),

('AquaFlow Elite', 'Compact countertop purifier with advanced mineral retention technology for healthy drinking water.', 299.99, 'Countertop Purifiers', 40, 4.6,
'["Mineral retention", "Compact design", "Easy installation", "LED indicators", "Quick-change filters"]',
'{"Flow Rate": "1.5 GPM", "Filter Life": "6 months", "Dimensions": "12\\" x 8\\" x 10\\"", "Warranty": "2 years", "Capacity": "1000 gallons"}',
'active', NOW(), NOW()),

('PureHouse Complete', 'Complete whole-house water treatment system with professional installation and monitoring.', 1299.99, 'Whole-house Solutions', 15, 4.9,
'["Whole-house coverage", "Multi-stage filtration", "Professional installation", "Automatic backwash", "System monitoring"]',
'{"Flow Rate": "10 GPM", "Filter Life": "18 months", "Dimensions": "20\\" x 12\\" x 54\\"", "Warranty": "5 years", "Capacity": "1,000,000 gallons"}',
'active', NOW(), NOW());

-- 13. Insert sample orders
INSERT INTO `orders` (`user_id`, `product_id`, `quantity`, `total_amount`, `status`, `customer_name`, `customer_email`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 599.99, 'completed', 'Demo User', 'user@echowater.com', DATE_SUB(NOW(), INTERVAL 5 DAY), DATE_SUB(NOW(), INTERVAL 5 DAY)),
(2, 2, 1, 299.99, 'pending', 'Demo User', 'user@echowater.com', DATE_SUB(NOW(), INTERVAL 2 DAY), DATE_SUB(NOW(), INTERVAL 2 DAY)),
(NULL, 3, 1, 1299.99, 'processing', 'John Smith', 'john.smith@example.com', DATE_SUB(NOW(), INTERVAL 1 DAY), NOW());

-- 14. Insert sample water quality data
INSERT INTO `water_quality_data` (`user_id`, `device_id`, `tds_level`, `ph_level`, `chlorine_level`, `temperature`, `flow_rate`, `filter_health`, `recorded_at`, `created_at`, `updated_at`) VALUES
(2, 'ECH001', 45.0, 7.2, 0.02, 22.5, 2.3, 85, NOW(), NOW(), NOW()),
(2, 'ECH001', 47.0, 7.1, 0.03, 23.0, 2.4, 84, DATE_SUB(NOW(), INTERVAL 1 HOUR), DATE_SUB(NOW(), INTERVAL 1 HOUR), DATE_SUB(NOW(), INTERVAL 1 HOUR)),
(2, 'ECH001', 43.0, 7.3, 0.01, 22.0, 2.2, 86, DATE_SUB(NOW(), INTERVAL 2 HOUR), DATE_SUB(NOW(), INTERVAL 2 HOUR), DATE_SUB(NOW(), INTERVAL 2 HOUR));

-- 15. Create sessions table for Laravel sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 16. Create cache table (optional but recommended for Laravel)
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- End of SQL setup

-- USAGE NOTES:
-- 1. The password for both demo accounts is: password123
-- 2. Admin account: admin@echowater.com
-- 3. User account: user@echowater.com
-- 4. You can add more products, users, and orders as needed
-- 5. The water_quality_data table stores IoT sensor data for the dashboard
-- 6. All tables use proper foreign key relationships
-- 7. JSON columns are used for flexible data storage (features, specifications)
-- 8. The system supports role-based permissions using Spatie Laravel Permission
