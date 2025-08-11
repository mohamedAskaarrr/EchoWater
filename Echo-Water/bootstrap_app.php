<?php

/**
 * EchoWater Application Bootstrap
 * This file helps initialize the application after database setup
 */

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class EchoWaterBootstrap
{
    public static function run()
    {
        echo "🌊 EchoWater Application Bootstrap\n";
        echo "================================\n\n";

        // Check database connection
        if (self::checkDatabase()) {
            echo "✅ Database connection successful\n";
        } else {
            echo "❌ Database connection failed\n";
            echo "Please check your .env database configuration\n";
            return false;
        }

        // Clear caches
        self::clearCaches();

        // Check if tables exist
        if (self::checkTables()) {
            echo "✅ Database tables found\n";
        } else {
            echo "❌ Database tables missing\n";
            echo "Please import the database_setup.sql file\n";
            return false;
        }

        // Verify roles and permissions
        self::verifyRolesAndPermissions();

        echo "\n🎉 Bootstrap completed successfully!\n";
        echo "You can now run: php artisan serve\n";
        echo "Admin login: admin@echowater.com / password123\n";
        echo "User login: user@echowater.com / password123\n";

        return true;
    }

    private static function checkDatabase()
    {
        try {
            DB::connection()->getPdo();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    private static function clearCaches()
    {
        echo "🧹 Clearing caches...\n";
        
        try {
            Artisan::call('config:clear');
            Artisan::call('cache:clear');
            Artisan::call('route:clear');
            Artisan::call('view:clear');
            echo "✅ Caches cleared\n";
        } catch (Exception $e) {
            echo "⚠️  Cache clearing failed: " . $e->getMessage() . "\n";
        }
    }

    private static function checkTables()
    {
        try {
            $tables = ['users', 'roles', 'permissions', 'products', 'orders'];
            foreach ($tables as $table) {
                if (!DB::getSchemaBuilder()->hasTable($table)) {
                    return false;
                }
            }
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    private static function verifyRolesAndPermissions()
    {
        try {
            $adminRole = Role::where('name', 'admin')->first();
            $userRole = Role::where('name', 'user')->first();
            
            if ($adminRole && $userRole) {
                echo "✅ Roles verified (admin, user)\n";
            } else {
                echo "⚠️  Roles may need to be recreated\n";
            }

            $permissions = Permission::count();
            echo "✅ Found {$permissions} permissions\n";

        } catch (Exception $e) {
            echo "⚠️  Role/Permission check failed: " . $e->getMessage() . "\n";
        }
    }
}

// Run bootstrap if called directly
if (php_sapi_name() === 'cli' && basename(__FILE__) == basename($_SERVER['argv'][0])) {
    // Include Laravel bootstrap
    require_once __DIR__ . '/vendor/autoload.php';
    $app = require_once __DIR__ . '/bootstrap/app.php';
    $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
    
    EchoWaterBootstrap::run();
}
