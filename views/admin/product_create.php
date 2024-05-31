<?php

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
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7c85dc7fad.js" crossorigin="anonymous"></script>
    <style type="text/css">
        * {
            font-family: 'Trebuchet MS';
        }

        h5 {
            text-transform: uppercase;
            color: salmon;
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

        .upload-box {
            font-size: 16px;
            background: white;
            border-radius: 50px;
            box-shadow: 5px 5px 10px black;
            width: 100%;
            outline: none;
            color: black;
        }

        input[type="number"],
        [type="text"] {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: #f8f8f8;
            border: 2px solid #ccc;
            border-radius: 50px;
            outline-color: white;
        }

        button[type="submit"] {
            background-color: red;
            color: white;
            padding: 10px;
            font-size: 12px;
            border: 0;
            margin-top: 20px;
        }

        body {
            background-color: #4D2121;
        }
    </style>
</head>


<body>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">

                </li>
            </ol>
        </nav>
        <h5 class="text-center text-light">Tambah Produk</h5>
        <form action="/Batra/admin/create" method="post" enctype="multipart/form-data" class="text-light">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token, ENT_QUOTES, 'UTF-8'); ?>">
            <section class="base">
                <div>
                    <label for="name">Nama Produk</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="image">Gambar Produk</label>
                    <input type="file" class="upload-box" name="image" id="image">
                </div>
                <div>
                    <label for="price">Harga Produk</label>
                    <input type="number" name="price">
                </div>
                <button type="submit" value="Simpan" name="submit" class="btn btn-light">Tambahkan</button>
            </section>
        </form>
        <script src="../../../bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Awal Footer -->
        <footer class="pt-5 pb-4">
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
</body>

</html>