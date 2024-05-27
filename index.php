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
    // Admin
    '/Batra/admin' => ['ProductController', 'index'],
    '/Batra/admin/show' => ['ProductController', 'show'],
    '/Batra/admin/create' => ['ProductController', 'create'],
    '/Batra/admin/edit' => ['ProductController', 'edit'],
    '/Batra/delete' => ['ProductController', 'delete'],

    // User
    '/Batra/' => ['UserController', 'index'],
    '/Batra/menu_product.php' => ['UserController', 'menu'],

    // Chart
    '/Batra/cart' => ['CartController', 'viewCart'],
    '/cart/add' => ['ProductController', 'addToCart'],
    '/cart/update' => ['ProductController', 'updateCart'],
    '/cart/remove' => ['ProductController', 'removeFromCart'],

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
