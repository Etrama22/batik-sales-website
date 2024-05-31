<?php
require './config/database.php';

// Menghasilkan token CSRF jika belum ada
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$csrf_token = $_SESSION['csrf_token'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7c85dc7fad.js" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: 'Trebuchet MS';
        }

        body {
            background-color: #4D2121;
        }

        h1 {
            text-transform: uppercase;
            color: white;
        }

        .base {
            width: 400px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background: rgb(0, 0, 0);
            background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0.8295693277310925) 0%, rgba(0, 0, 0, 0.5718662464985995) 0%);
        }

        label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }

        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: blue;
            color: black;
        }

        button[type="submit"] {
            background-color: white;
            color: black;
            padding: 10px;
            font-size: 14px;
            border: 0;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <center>
        <a href="/Batra/admin">Back to List</a>
        <h1>Edit Produk
            <?php echo $product['name']; ?>
        </h1>
    </center>
    <form action="/Batra/admin/edit" method="post" enctype="multipart/form-data">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token, ENT_QUOTES, 'UTF-8'); ?>">
        <section class="base text-light">
            <div>
                <label for="id">Id Produk</label>
                <input type="text" name="id" value="<?php echo $product['id']; ?>" readonly>
            </div>
            <div>
                <label for="name">Nama Produk</label>
                <input type="text" name="name" value="<?php echo $product['name']; ?>" require>
            </div>
            <div>

                <label for="image">Gambar Produk</label>
                <img src="../img/<?php echo $product['image']; ?>" style="width: 120px; float: left; margin-bottom: 5px;">
                <input type="file" name="image" value="<?php echo $product['image']; ?>" required />
                <i style="float: left; font-size: 11px; color: red;">*Wajib Diubah Setiap Edit Data;</i>
            </div>
            <div>

                <label for="price">harga_produk</label>
                <input type="text" name="price" value="<?php echo $product['price']; ?>" require>
            </div>
            <div>
                <button type="submit" value="save" name="submit" class="btn btn-outline-primary">Save</button>
            </div>
        </section>
    </form>
    <!-- Awal Footer -->
    <footer class="pt-5 pb-4 bg-ligt">
        <div class="container">
            <hr class="mb-4 text-light">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8 text-md-start text-light">
                    <p>Copyright @2023 All rights reserved by:
                        <a href="#" style="text-decoration: none;">
                            <strong class="text-warning">BATRA OFFICIAL</strong></a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-end">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-whatsapp"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>