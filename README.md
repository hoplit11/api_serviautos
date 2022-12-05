# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

_____________________________________________________________________________________

#Instalacions del gestor de paquetes para programar en PHP

// ingresar a https://getcomposer.org y descargar composer e instalarlo , tambien ingresar a https://www.apachefriends.org/es/index.html y descargar el gestor de servidor
## Instalacion de un proyecto utilizando composer 
# comando de compose para crear proyecto, estrutura con lumen que es un microframework de lavarel que utiliza instrucciones para la creacion de aplicaciones 
#info https://lumen.laravel.com/docs/9.x

composer create-project --prefer-dist laravel/lumen apirest-servi_autos

# verificacion en el navegador 
http://localhost/apirest-servi_autos/public/

CONFIGURAR .env
DB_DATABASE=registros  // es la base de datos creada previamente en localhost/phpMyAdmin
DB_USERNAME=root  // es el nombre del usuario cuando configuramos heidi
DB_PASSWORD=  // se deja el campo vacio por ahora




CREACION DE TABLAS 
# Creacion de entidades por medio de migraciones.
# En terminal hacer: vamos a crea un atbla nueva en la base de datos clientes ya vinculada en .env

php artisan make:migration registroclientes --create=registroclientes

#Tabla registroautos

php artisan make:migration registroautos --create=registroautos

