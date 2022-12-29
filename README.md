# Installation

* Clone Repo
* Copy .env.example to .evn file
* Create database iipa_db
* Run command `composer install` / `composer update`
* Run command `php artisan migrate --seed`
* Run command `php artisan key:generate`
* Run command `php artisan jwt:secret`

## Requires

* php: ^7.3|^8.0
* astrotomic/laravel-translatable: ^11.9
* cviebrock/eloquent-sluggable: ^8.0
* fideloper/proxy: ^4.4
* fruitcake/laravel-cors: ^2.0
* guzzlehttp/guzzle: ^7.0.1
* infyomlabs/coreui-templates: dev-develop-metronic
* infyomlabs/generator-builder: dev-master
* infyomlabs/laravel-generator: 8.0.x-dev
* infyomlabs/routes-explorer: dev-master
* intervention/image: ^2.5
* laravel/framework: ^8.12
* laravel/tinker: ^2.5
* laravel/ui: 3.0
* laravelcollective/html: ^6.2
* pusher/pusher-php-server: ^7.0
* spatie/laravel-permission: ^4.0
* tymon/jwt-auth: ^1.0
