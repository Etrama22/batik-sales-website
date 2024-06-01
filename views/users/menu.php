<?php
include 'config/database.php'
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="public/assets/styleHome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7c85dc7fad.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #4D2121;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg text-center navbar-dark" style="background-color: #4D2121;">
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
                        <a class="nav-link" href="/Batra/cart"><button type="button" class="btn btn-outline-light btn-sm"><i class="fa-solid fa-cart-shopping"></i></button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Akhir Navbar-->

    <!-- Menu Section -->
    <div class="container">
        <div class="header text-center text-light">
            <h1>Our Top Menu</h1>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col bg-light rounded-4 border shadow-lg p-3 m-5">
                    <img src="public/image/productBatik/warpSkirt/model1.jpg" class="rounded-circle w-50 m-3" alt="">
                    <p class="text-center mt-3">
                        <?php
                        $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=1001");
                        $dataproducts = mysqli_fetch_assoc($queryproducts);

                        echo $dataproducts['name'];
                        ?>
                    </p>
                    <p class="text-center">IDR.
                        <?php echo $dataproducts['price']; ?>
                    </p>
                    <a href="/Batra/show?id=<?php echo htmlspecialchars($dataproducts['id'], ENT_QUOTES, 'UTF-8'); ?>">
                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i></button>
                    </a>

                </div>


                <div class="col bg-light rounded-4 border shadow-lg p-3 m-5">
                    <img src="public/image/productBatik/warpSkirt/model2.jpg" class="rounded-circle w-50 m-3" alt="">
                    <p class="text-center mt-3"><?php
                                                $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=1002");
                                                $dataproducts = mysqli_fetch_assoc($queryproducts);
                                                echo $dataproducts['name']
                                                ?>
                    </p>
                    <p class="text-center">IDR.
                        <?php echo $dataproducts['price'] ?>
                    </p>
                    <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i></button>
                </div>
                <div class="col bg-light rounded-4 border shadow-lg p-3 m-5">
                    <img src="public/image/productBatik/warpSkirt/model3.jpg" class="rounded-circle w-50 m-3" alt="">
                    <p class="text-center mt-3"><?php
                                                $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=1003");
                                                $dataproducts = mysqli_fetch_assoc($queryproducts);
                                                echo $dataproducts['name']
                                                ?>
                    </p>
                    <p class="text-center">IDR.
                        <?php echo $dataproducts['price'] ?>
                    </p>
                    <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i></button>
                </div>
            </div>
        </div>



        <div class="container text-center">
            <div class="row">
                <div class="col bg-light rounded-4 border shadow-lg p-3 m-5">
                    <img src="public/image/productBatik/bag/bag1.jpg" class="rounded-circle w-50 m-3" alt="">
                    <p class="text-center mt-3"><?php
                                                $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=2001");
                                                $dataproducts = mysqli_fetch_assoc($queryproducts);
                                                echo $dataproducts['name']
                                                ?></p>
                    <p class="text-center">IDR.
                        <?php echo $dataproducts['price'] ?></p>
                    <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i></button>
                </div>

                <div class="col bg-light rounded-4 border shadow-lg p-3 m-5">
                    <img src="public/image/productBatik/bag/bag2.jpg" class="w-50 m-3" alt="">
                    <p class="text-center mt-3"><?php
                                                $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=2002");
                                                $dataproducts = mysqli_fetch_assoc($queryproducts);
                                                echo $dataproducts['name']
                                                ?></p>
                    <p class="text-center">IDR.
                        <?php echo $dataproducts['price'] ?></p>
                    <button type="button" class="btn btn-primary"><i class="fa-solid fa-eye"></i></button>
                </div>

                <div class="col bg-light rounded-4 border shadow-lg p-3 m-5">
                    <img src="public/image/productBatik/bag/bag3.jpg" class="w-50 m-3" alt="">
                    <p class="text-center mt-3"><?php
                                                $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=2003");
                                                $dataproducts = mysqli_fetch_assoc($queryproducts);
                                                echo $dataproducts['name']
                                                ?></p>
                    <p class="text-center">IDR.
                        <?php echo $dataproducts['price'] ?></p>
                    <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i></button>
                </div>
            </div>
        </div>



        <div class="container text-center">
            <div class="row">
                <div class="col bg-light rounded-4 border shadow-lg p-3 m-5">
                    <img src="public/image/productBatik/couple/couple1.jpeg" class="rounded-circle w-50 m-3" alt="">
                    <p class="text-center mt-3"><?php
                                                $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=3001");
                                                $dataproducts = mysqli_fetch_assoc($queryproducts);
                                                echo $dataproducts['name']
                                                ?></p>
                    <p class="text-center">IDR.
                        <?php echo $dataproducts['price'] ?></p>
                    <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i></button>
                </div>

                <div class="col bg-light rounded-4 border shadow-lg p-3 m-5">
                    <img src="public/image/productBatik/couple/couple2.jpg" class="rounded-circle w-50 m-3" alt="">
                    <p class="text-center mt-3"><?php
                                                $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=3002");
                                                $dataproducts = mysqli_fetch_assoc($queryproducts);
                                                echo $dataproducts['name']
                                                ?></p>
                    <p class="text-center">IDR.
                        <?php echo $dataproducts['price'] ?></p>
                    <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i></button>
                </div>

                <div class="col bg-light rounded-4 border shadow-lg p-3 m-5">
                    <img src="public/image/productBatik/couple/couple3.jpg" class="rounded-circle w-50 m-3" alt="">
                    <p class="text-center mt-3"><?php
                                                $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=3003");
                                                $dataproducts = mysqli_fetch_assoc($queryproducts);
                                                echo $dataproducts['name']
                                                ?></p>
                    <p class="text-center">IDR.
                        <?php echo $dataproducts['price'] ?></p>
                    <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i></button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>