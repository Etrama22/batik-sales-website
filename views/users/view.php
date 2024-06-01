<?php
include 'config/database.php';
function formatRupiah($number)
{
    return 'Rp ' . number_format($number, 0, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="./public/assets/styleHome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!--Awal Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4D2121;">
        <div class="container">
            <a class="logo navbar-brand" href="#">Batra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Batra/menu"><button type="button" class="btn btn-outline-light btn-sm">SHOP NOW</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Akhir Navbar-->

    <div class="container">
        <div class="card my-5 mx-5" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <?= "<img src='./public/assets/imgDB/" . $products['image'] . "'style='width:400px; 'class='img-fluid rounded-start'>" ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p><?= $products['name'] ?></p>
                        </h5>
                        <h6 class="card-title">
                            <p><?= formatRupiah($products['price']) ?></p>
                        </h6>
                        <p class="card-text"><?= $products['description'] ?></p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add more product details here as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>