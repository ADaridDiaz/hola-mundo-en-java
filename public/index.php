<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

/**
 * Cargar el autoload de Composer
 */
require __DIR__.'/../vendor/autoload.php';

/**
 * Cargar la aplicación Laravel
 */
$app = require_once __DIR__.'/../bootstrap/app.php';

/**
 * Crear una instancia del kernel HTTP
 */
$kernel = $app->make(Kernel::class);

/**
 * Capturar la solicitud HTTP entrante
 */
$request = Request::capture();

/**
 * Manejar la solicitud y generar la respuesta
 */
$response = $kernel->handle($request);

/**
 * Enviar la respuesta al navegador
 */
$response->send();

/**
 * Finalizar la ejecución de la aplicación
 */
$kernel->terminate($request, $response);
