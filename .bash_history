ls
php artisan migrate
show databases;
docker exec -it laravel-crud-db-1 mysql -u root -p
exit
php artisan migrate
clear
php artisan config:clear
php artisan migrate
php artisan db:seed
clear
git add .
exit
