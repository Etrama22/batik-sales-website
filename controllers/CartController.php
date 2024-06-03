<?php
require_once 'config/database.php';

class CartController
{
    private $cart;
    public function viewCart()
    {
        require 'views/cart/index.php';
    }

    public function addToCart()
    {
        if (isset($_POST['add_to_cart'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];

            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                $found = false;
                foreach ($cart as &$item) {
                    if ($item['id'] == $id) {
                        $item['quantity'] += $quantity;
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    $cart[] = array(
                        'id' => $id,
                        'name' => $name,
                        'price' => $price,
                        'quantity' => $quantity
                    );
                }
            } else {
                $cart = array();
                $cart[] = array(
                    'id' => $id,
                    'name' => $name,
                    'price' => $price,
                    'quantity' => $quantity
                );
            }

            $_SESSION['cart'] = $cart;
        }
        header('Location: /Batra/cart');
        exit();
    }

    public function updateCart()
    {
        if (isset($_POST['update_cart'])) {
            $id = $_POST['id'];
            $quantity = $_POST['quantity'];

            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as &$item) {
                    if ($item['id'] == $id) {
                        $item['quantity'] = $quantity;
                        break;
                    }
                }
            }
        }
        header('Location: /Batra/cart');
        exit();
    }

    public function deleteFromCart()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $item) {
                    if ($item['id'] == $id) {
                        unset($_SESSION['cart'][$key]);
                        break;
                    }
                }
            }
        }
        header('Location: /Batra/cart');
        exit();
    }
}
