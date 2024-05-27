<?php
require_once 'models/Product.php';
require './config/database.php';

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

            // Periksa apakah kunci 'name' dan 'price' ada dalam $_POST
            if (isset($_POST['name']) && isset($_POST['price'])) {
                $name = $this->validateInput($_POST['name']);
                $price = $this->validateInput($_POST['price']);

                if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                    $imageName = basename($_FILES['image']['name']);
                    $imagePath = './public/assets/imgDB/' . $imageName;
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                        $this->model->create($name, $imageName, $price); // Simpan hanya nama file, bukan path lengkap
                        header('Location: /Batra/admin');
                        exit();
                    } else {
                        echo "Failed to upload image.";
                    }
                } else {
                    echo "Invalid image file.";
                }
            } else {
                echo "Name and price are required.";
            }
        } else {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
            require_once 'views/admin/product_create.php';
        }
    }


    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die("CSRF token validation failed");
            }

            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];

            // Proses unggah gambar
            $edit = $_FILES['image']['name'];
            $file_fetch_location = $_FILES['image']['tmp_name'];
            $file_save_location = __DIR__ . '/../public/assets/imgDB/' . $edit;

            // Pastikan direktori tujuan ada
            $target_dir = __DIR__ . '/../public/assets/imgDB/';
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }

            if (move_uploaded_file($file_fetch_location, $file_save_location)) {
                $this->model->update($id, $name, $edit, $price);
                header('Location: /Batra/admin');
                exit();
            } else {
                echo "Failed to upload image.";
            }
        } else {
            $product = $this->model->getById($id);
            require_once 'views/admin/product_edit.php';
        }
    }
    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /Batra/admin');
    }
}
