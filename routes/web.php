<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
/*
$router->get('/', function () use ($router) {
    return $router->app->version();
});*/


$router->get('/', function () use ($router) {

    return "Hola mundo";
});

$router->get('registroclientes','Controler_registroClientes@verClientes' ) ;

// Insertar informacion 
$router->post('registroclientes','Controler_registroClientes@insertar');

// Insertar informacion 
$router->post('registroclientes','Controler_registroclientes@insertar');


//obtener un registro especifico de la tabla
$router->get('registroclientes/{id}','Controler_registroclientes@consulta'); //

//eliminar un registro especifico de la tabla
$router->delete('registroclientes/{id}','Controler_registroclientes@eliminar'); //

//Actualizar informacion segun el parametro recibido
$router->post('registroclientes/{id}','Controler_registroclientes@actualizar'); //


