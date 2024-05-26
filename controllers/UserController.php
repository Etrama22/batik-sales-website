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
        require_once 'views/user/index.php';
    }
}
