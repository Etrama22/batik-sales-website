<?php
require_once 'controllers/ProductController.php';
require_once 'controllers/UserController.php';

// Database connection (contoh)
$host = 'localhost';
$dbname = 'penjualan';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

session_start();

$routes = [
    '/Batra/admin' => ['ProductController', 'index'],
    '/Batra/views/admin/product_show' => ['ProductController', 'show'],
    '/Batra/views/admin/product_create' => ['ProductController', 'create'],
    '/Batra/views/admin/product_edit' => ['ProductController', 'edit'],
    '/Batra/delete' => ['ProductController', 'delete'],

    // User
    '/Batra/views/users/' => ['UserController', 'index'],
];

$request = strtok($_SERVER['REQUEST_URI'], '?');
// echo "Request URI: " . $request . "<br>"; // Debugging output
if (array_key_exists($request, $routes)) {
    list($controllerName, $method) = $routes[$request];
    // echo "Controller: " . $controllerName . "<br>"; // Debugging output
    // echo "Method: " . $method . "<br>"; // Debugging output
    $controller = new $controllerName($db);
    $id = $_GET['id'] ?? null;
    call_user_func([$controller, $method], $id);
} else {
    http_response_code(404);
    echo "Page not found";
}
