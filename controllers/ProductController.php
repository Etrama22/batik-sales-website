<?php
require_once 'models/Product.php';

class ProductController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Product($db);
    }

    private function validateInput($data)
    {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    public function index()
    {
        $products = $this->model->getAll();
        require_once 'views/admin/index.php';
    }

    public function show($id)
    {
        $product = $this->model->getById($id);
        require_once 'views/admin/product_show.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die('CSRF token validation failed');
            }

            $name = $this->validateInput($_POST['name']);
            $price = $this->validateInput($_POST['price']);

            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $imagePath = 'uploads/' . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    $this->model->create($name, $imagePath, $price);
                    header('Location: /admin');
                    exit();
                } else {
                    echo "Failed to upload image.";
                }
            } else {
                echo "Invalid image file.";
            }
        } else {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
            require_once 'views/admin/product_create.php';
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die('CSRF token validation failed');
            }

            $name = $this->validateInput($_POST['name']);
            $price = $this->validateInput($_POST['price']);

            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $imagePath = 'uploads/' . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    $this->model->update($id, $name, $imagePath, $price);
                    header('Location: /admin');
                    exit();
                } else {
                    echo "Failed to upload image.";
                }
            } else {
                echo "Invalid image file.";
            }
        } else {
            $product = $this->model->getById($id);
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
            require_once 'views/admin/product_edit.php';
        }
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /admin');
    }
}
