<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

/**
 * Registrar el cargador automático generado por Composer
 * Esto permite cargar todas las dependencias del proyecto.
 */
require __DIR__.'/../vendor/autoload.php';

/**
 * Encender la aplicación
 * Aquí se crea una nueva instancia de la aplicación Laravel.
 */
$app = require __DIR__.'/../vendor/autoload.php';

/**
 * Crear una instancia del kernel HTTP
 * El kernel maneja las solicitudes y respuestas.
 */
$kernel = $app->make(Kernel::class);

/**
 * Capturar la solicitud HTTP entrante
 */
$request = Request::capture();

/**
 * Manejar la solicitud y enviar la respuesta al navegador
 */
$response = $kernel->handle($request)->send();

/**
 * Terminar la ejecución de la aplicación
 * Aquí se ejecutan tareas posteriores, como cerrar conexiones.
 */
$kernel->terminate($request, $response);
