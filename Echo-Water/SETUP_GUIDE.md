# EchoWater Laravel Application Setup Guide

## Prerequisites
- PHP 8.2 or higher
- Composer
- MySQL/MariaDB database
- Web server (Apache/Nginx) or Laravel's built-in server

## Installation Steps

### 1. Database Setup
1. Create a new MySQL database named `echowater`
2. Import the SQL file using phpMyAdmin or command line:
   ```sql
   mysql -u your_username -p echowater < database_setup.sql
   ```
   Or copy and paste the contents of `database_setup.sql` directly into phpMyAdmin

### 2. Environment Configuration
1. Copy `.env.example` to `.env`:
   ```bash
   cp .env.example .env
   ```

2. Update your `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=echowater
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   
   APP_KEY=base64:your_app_key_here
   APP_DEBUG=true
   APP_URL=http://localhost:8000
   
   SESSION_DRIVER=database
   CACHE_DRIVER=database
   ```

### 3. Laravel Setup
1. Install dependencies:
   ```bash
   composer install
   ```

2. Generate application key:
   ```bash
   php artisan key:generate
   ```

3. Clear caches:
   ```bash
   php artisan config:clear
   php artisan cache:clear
   php artisan route:clear
   php artisan view:clear
   ```

### 4. File Permissions (if on Linux/Mac)
```bash
chmod -R 775 storage bootstrap/cache
```

### 5. Start the Application
```bash
php artisan serve
```

Visit `http://localhost:8000` to see your application.

## Demo Accounts
- **Admin**: admin@echowater.com / password123
- **User**: user@echowater.com / password123

## Features Overview

### For Regular Users:
- Dashboard with water quality metrics
- View and browse products
- User profile management

### For Admin Users:
- Complete dashboard with analytics
- User management (CRUD)
- Product management (CRUD)
- Order management (CRUD)
- System monitoring

## Application Structure

### Controllers:
- `HomeController` - Homepage and public pages
- `AuthController` - Login, Register, Logout
- `DashboardController` - User dashboard with water quality data
- `ProductController` - Product display and management
- `AdminController` - Admin panel functionality

### Models:
- `User` - User management with roles
- `Product` - Product catalog
- `Order` - Order management
- `WaterQualityData` - IoT sensor data

### Authentication & Authorization:
- Uses Spatie Laravel Permission for roles
- Middleware protection for admin routes
- Role-based access control

## Troubleshooting

### Common Issues:

1. **Database Connection Error**
   - Check your `.env` database credentials
   - Ensure MySQL service is running
   - Verify database exists

2. **Permission Denied Errors**
   - Check file permissions on storage and bootstrap/cache
   - Run: `chmod -R 775 storage bootstrap/cache`

3. **Class Not Found Errors**
   - Run: `composer dump-autoload`
   - Clear config cache: `php artisan config:clear`

4. **Routes Not Working**
   - Clear route cache: `php artisan route:clear`
   - Check web server configuration

5. **Session Issues**
   - Ensure sessions table exists in database
   - Set `SESSION_DRIVER=database` in `.env`

### Development Commands:

```bash
# Clear all caches
php artisan optimize:clear

# View routes
php artisan route:list

# Check database connection
php artisan tinker
>>> DB::connection()->getPdo()

# Create storage link (if needed)
php artisan storage:link
```

## Next Steps
1. Customize the design and add your branding
2. Add email configuration for user notifications
3. Set up queue workers for background tasks
4. Configure file storage for product images
5. Add more IoT device integrations
6. Implement payment processing
7. Add more advanced analytics

## Support
This is a custom Laravel application built for EchoWater. For technical support, refer to the Laravel documentation or contact your development team.
