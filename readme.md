## PHP-LaravelApp

this is a LaravelApp build with Docker and all components to run the App in the Laravel PHP Framework.

## Prerequisite
 
* clone and build the App from repository (needed files: web.docker, app.docker, docker-compose.yml)
 
 after the clone follow these steps: 
 
// used to copy the environments
* ``cp .env.example .env``

// build the system
* ``docker-compose up -d --build``

// used to install composer inside the container
* ``docker exec -i php-laravel_app_1 bash -c "composer install"``

// used to generate an app-key for laravel
* ``docker exec -i php-laravel_app_1 bash -c "php artisan key:generate"``

Test the implemented apps through localhost: 

* ``localhost:8080/ip``         - get ip from client
* ``localhost:8080/header``     - get header from client
* ``localhost:8080/md5?text=``  - input a sample text and hash it with md5
* ``localhost:8080/info``       - get some sample data

## web
 
* Database: ``mysql`` , ``redis``
* PHP Framework: ``Laravel``
* Composer
 

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
