#!/bin/bash
# Deployment script that preserves storage/app/public directory

# Backup storage before deployment
if [ -d "storage/app/public" ]; then
    echo "Backing up storage/app/public..."
    tar -czf storage-backup-$(date +%Y%m%d-%H%M%S).tar.gz storage/app/public
fi

# Your deployment commands here (git pull, composer install, etc.)
# git pull origin main
# composer install --no-dev --optimize-autoloader
# php artisan migrate --force
# php artisan config:cache
# php artisan route:cache
# php artisan view:cache

# Restore storage after deployment
if [ -f storage-backup-*.tar.gz ]; then
    echo "Restoring storage/app/public..."
    tar -xzf storage-backup-*.tar.gz
    rm storage-backup-*.tar.gz
fi

# Ensure storage link exists
php artisan storage:link

echo "Deployment complete!"

