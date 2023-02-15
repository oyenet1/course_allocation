set -e
echo "Deploying application"

#Enter maintenance mode

(php artisan down --message 'The website is been quickly updated. Please tey again in minutes.') || true
  #update codebase
  git pull origin master

#exit maintainance mode
composer update
composer dump-autoload
php artisan route:clear
php artisan view:clear
php artisan cache:clear
php artisan config:clear
php artisan optimize
php artisan up
php artisan migrate --force

echo "Website deployed"
