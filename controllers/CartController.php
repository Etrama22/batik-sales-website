<?php
require_once 'models/Product.php';

class CartController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Product($db);
    }

    public function index()
    {
        $products = $this->model->getAll();
        require_once 'views/users/menu_product.php';
    }

    public function viewCart()
    {
        $cart = $_SESSION['cart'] ?? [];
        require_once 'views/users/cart.php';
    }

    public function addToCart()
    {
        $productId = $_POST['id'];
        $quantity = $_POST['quantity'];

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] += $quantity;
        } else {
            $_SESSION['cart'][$productId] = $quantity;
        }

        header('Location: /cart');
    }

    public function updateCart()
    {
        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        if (isset($_SESSION['cart'][$productId])) {
            if ($quantity > 0) {
                $_SESSION['cart'][$productId] = $quantity;
            } else {
                unset($_SESSION['cart'][$productId]);
            }
        }

        header('Location: /cart');
    }

    public function removeFromCart()
    {
        $productId = $_POST['product_id'];

        if (isset($_SESSION['cart'][$productId])) {
            unset($_SESSION['cart'][$productId]);
        }

        header('Location: /cart');
    }
}
