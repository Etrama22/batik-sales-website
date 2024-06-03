<?php

require_once('models/Product.php');

class UserController
{

    private $model;

    public function __construct($db)
    {
        $this->model = new Product($db);
    }

    // private function validateInput($data){
    //     return htmlspecialchars(stripslashes(trim($data)));
    // }

    public function index()
    {
        $products = $this->model->getAll();
        require_once 'views/users/index.php';
    }
    public function menu()
    {
        $products = $this->model->getAll();
        require_once 'views/users/menu.php';
    }

    public function view($id)
    {
        // Get product details by ID
        $products = $this->model->getById($id);

        // Check if product exists
        if (!$products) {
            // Jika produk tidak ditemukan, bisa ditangani sesuai kebutuhan Anda
            echo "Product not found!";
            return;
        }

        // Load the view to display product details
        require_once 'views/users/view.php';
    }
}
