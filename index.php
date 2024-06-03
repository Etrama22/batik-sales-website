<?php
require_once 'controllers/ProductController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/CartController.php';

// Database connection 
$host = 'localhost';
$dbname = 'BatikSalesDB';
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
    '/Batra/menu' => ['UserController', 'menu'],
    '/Batra/show' => ['UserController', 'view'],

    // Cart
    '/Batra/cart' => ['CartController', 'viewCart'],
    '/Batra/cart/add' => ['CartController', 'addToCart'],
    '/Batra/cart/update' => ['CartController', 'updateCart'],
    '/Batra/cart/delete' => ['CartController', 'deleteFromCart'],
];

$request = strtok($_SERVER['REQUEST_URI'], '?');

if (array_key_exists($request, $routes)) {
    list($controllerName, $method) = $routes[$request];
    $controller = new $controllerName($db);
    $id = $_GET['id'] ?? null;

    // Untuk mengakses parameter post dari form
    $postData = $_POST ?? [];

    call_user_func([$controller, $method], $id, $postData);
} else {
    http_response_code(404);
    echo "Page not found";
}
