# About Getidon

Getidon is the powerful todo list, built in Laravel framework

## Requirements

You need to have the following installed:

* PHP
* composer
* Nginx
* MySQL
* [Laravel](https://laravel.com/docs/7.x) Laravel Installation

## Getting Started

Clone the repository to your local machine
```shell
git clone https://github.com/pwndex/Getidon.git
```

Open Getidon folder, copy .env file and generate key via artisan
```shell
cd Getidon
cp .env.example .env
php artisan key:generate
```

Install all dependencies via composer and npm
```shell
composer install
npm install
```

Set your MySQL database credentials inside .env file
```shell
DB_DATABASE=<YOUR_DATABASE_NAME>
DB_USERNAME=<YOUR_DATABASE_USERNAME>
DB_PASSWORD=<YOUR_DATABASE_PASSWORD>
```

Make migrate
```shell
php artisan migrate
```

Run the app
```shell
php artisan serve
```

## License

The Getidon is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).