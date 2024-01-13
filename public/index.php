<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\dashboard;
use Controllers\dashboardController;
use Controllers\LoginController;
use Controllers\TareaController;
use MVC\Router;
$router = new Router();

// Login
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Crear Cuenta
$router->get('/crear', [LoginController::class, 'crear']);
$router->post('/crear', [LoginController::class, 'crear']);

// Formulario de olvide mi password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [LoginController::class, 'reestablecer']);
$router->post('/reestablecer', [LoginController::class, 'reestablecer']);

// Confirmacion de Cuenta
$router->get('/mensaje', [LoginController::class, 'mensaje']);
$router->get('/confirmar', [LoginController::class, 'confirmar']);

// Zona de Proyectos
$router->get('/dashboard', [dashboardController::class, 'index']);
$router->get('/crear-proyecto', [dashboardController::class, 'crear_proyecto']);
$router->post('/crear-proyecto', [dashboardController::class, 'crear_proyecto']);
$router->get('/proyecto', [dashboardController::class, 'proyecto']);
$router->get('/perfil', [dashboardController::class, 'perfil']);
$router->post('/perfil', [dashboardController::class, 'perfil']);
$router->get('/cambiar-password', [dashboardController::class, 'cambiar_password']);
$router->post('/cambiar-password', [dashboardController::class, 'cambiar_password']);

// API para las tareas
$router->get('/api/tareas', [TareaController::class, 'index']);
$router->post('/api/tarea', [TareaController::class, 'crear']);
$router->post('/api/actualizar', [TareaController::class, 'actualizar']);
$router->post('/api/eliminar', [TareaController::class, 'eliminar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();