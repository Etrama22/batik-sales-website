<?php
require 'config/database.php';
require_once 'models/Cart.php';

class CartController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Cart($db);
    }

    public function index()
    {
        $cartId = $_SESSION['id'] ?? null;
        if ($cartId) {
            $cartItems = $this->model->getCartItems($cartId);
        } else {
            $cartItems = [];
        }
        require_once 'views/cart/index.php';
    }

    public function addToCart()
    {
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $modelOption = $_POST['model_option'];

        if (!isset($_SESSION['id'])) {
            $cartId = $this->model->createCart();
            $_SESSION['id'] = $cartId;
        } else {
            $cartId = $_SESSION['id'];
        }

        // Ensure $productId is set before adding to cart
        if (!empty($productId)) {
            $this->model->addToCart($cartId, $productId, $quantity, $price, $modelOption);
        }

        header('Location: /Batra/cart');
        exit();
    }


    public function updateCart()
    {
        $cartId = $_SESSION['id'];
        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'];
        $modelOption = $_POST['model_option'];

        $this->model->updateCartItem($cartId, $productId, $quantity, $modelOption);

        header('Location: /Batra/cart');
        exit();
    }

    public function removeFromCart()
    {
        $cartId = $_SESSION['id'];
        $productId = $_POST['product_id'];

        $this->model->removeFromCart($cartId, $productId);

        header('Location: /Batra/cart');
        exit();
    }
}
