# Install PHP dependencies
composer install --optimize-autoloader --no-dev

# Install Node.js dependencies for Vite, Tailwind, etc.
npm install

# Build assets using NPM
npm run build

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan optimize:clear

# Run any database migrations
php artisan migrate --force

# Cache the various components of the Laravel application
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
