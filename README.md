# Product-Management-System
Laravel 11 Product management system 


Clone the repository

git clone https://github.com/harsha198805/Product-Management-System.git

Switch to the repo folder

cd Product-Management-System
Install all the dependencies using composer

composer install
Copy the example env file and make the required configuration changes in the .env file

cp .env.example .env
Generate a new application key

php artisan key:generate
Run Migrations

php artisan migrate
Db seed

php artisan db:seed

Run Project

php artisan serve