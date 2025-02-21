<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Cargar el autoloader de Composer
require __DIR__.'/../vendor/autoload.php';

// Cargar la aplicación de Laravel
$app = require_once __DIR__.'/../bootstrap/app.php';

// Crear una instancia del kernel HTTP
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Manejar la solicitud y enviar la respuesta
$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);