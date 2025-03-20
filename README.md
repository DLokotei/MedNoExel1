php artisan migrate
php artisan serve

site at: http://127.0.0.1:8000

laravel new MedNoExel --react
npm run build
php artisan migrate:rollback
php artisan make:model UserLogsModel -m
php artisan make:migration create_user_logs_table