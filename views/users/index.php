<?php
require 'config/database.php';

$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/assets/styleHome.css">
    <script src="https://kit.fontawesome.com/7c85dc7fad.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>BATRA OFFICIAL</title>
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

    <!--Awal Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/image/carousel/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="public/image/carousel/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="public/image/carousel/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Akhir Carousel-->

    <!-- Awal Jumbotron -->
    <!-- Awal Galeri -->
    <section class="jumbotron text-light">
        <h1 class="display-4 text-center mt-5" id="Product">OUR BRANDS</h1>
        <div class="container text-center">
            <p class="lead mb-5">BATRA OFFICIAL mengerti bahwa tiap orang memiliki gaya dan pilihan sendiri.
                Peringati keindahan hari dengan Batik yang dibuat secara eksklusif khusus untuk Anda.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="Sarung text-center"><strong>Rok Lilit Batik</strong></h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <?php
                    $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=1001");
                    $dataproducts = mysqli_fetch_assoc($queryproducts);
                    ?>
                    <?= "<img src='./public/assets/imgDB/" . $dataproducts['image'] . "'class='img-thumbnail rounded-start'>" ?>
                    <p class="text-center mt-3"><?= $dataproducts['name'] ?></p>
                </div>


                <div class="col-4">
                    <?php
                    $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=1002");
                    $dataproducts = mysqli_fetch_assoc($queryproducts);
                    ?>
                    <?= "<img src='./public/assets/imgDB/" . $dataproducts['image'] . "'class='img-thumbnail rounded-start'>" ?>
                    <p class="text-center mt-3"><?= $dataproducts['name'] ?></p>
                </div>


                <div class="col-4">
                    <?php
                    $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=1003");
                    $dataproducts = mysqli_fetch_assoc($queryproducts);
                    ?>
                    <?= "<img src='./public/assets/imgDB/" . $dataproducts['image'] . "'class='img-thumbnail rounded-start'>" ?>
                    <p class="text-center mt-3"><?= $dataproducts['name'] ?></p>


                </div>
            </div>

            <div class="row mt-5">
                <div class="col mb-3">
                    <h2 class="Sarung text-center"><strong>Tas Batik</strong></h2>
                </div>
                <div class="row">
                    <div class="col-4">
                        <?php
                        $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=2001");
                        $dataproducts = mysqli_fetch_assoc($queryproducts);
                        ?>
                        <?= "<img src='./public/assets/imgDB/" . $dataproducts['image'] . "'class='img-thumbnail rounded-start'>" ?>
                        <p class="text-center mt-3"><?= $dataproducts['name'] ?></p>


                    </div>


                    <div class="col-4">
                        <?php
                        $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=2003");
                        $dataproducts = mysqli_fetch_assoc($queryproducts);
                        ?>
                        <?= "<img src='./public/assets/imgDB/" . $dataproducts['image'] . "'class='img-thumbnail rounded-start'>" ?>
                        <p class="text-center mt-3"><?= $dataproducts['name'] ?></p>

                        <?php
                        $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=2002");
                        $dataproducts = mysqli_fetch_assoc($queryproducts);
                        ?>

                    </div>
                    <div class="col-4">
                        <?= "<img src='./public/assets/imgDB/" . $dataproducts['image'] . "'class='img-thumbnail rounded-start'>" ?>
                        <p class="text-center mt-3"><?= $dataproducts['name'] ?></p>



                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col mb-3">
                    <h2 class="Sarung text-center"><strong>Baju Couple Batik</strong></h2>
                </div>
                <div class="row">
                    <div class="col-4">
                        <?php
                        $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=3001");
                        $dataproducts = mysqli_fetch_assoc($queryproducts);
                        ?>
                        <?= "<img src='./public/assets/imgDB/" . $dataproducts['image'] . "'class='img-thumbnail rounded-start'>" ?>
                        <p class="text-center mt-3"><?= $dataproducts['name'] ?></p>


                    </div>


                    <div class="col-4">
                        <?php
                        $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=3002");
                        $dataproducts = mysqli_fetch_assoc($queryproducts);
                        ?>
                        <?= "<img src='./public/assets/imgDB/" . $dataproducts['image'] . "'class='img-thumbnail rounded-start'>" ?>
                        <p class="text-center mt-3"><?= $dataproducts['name'] ?></p>


                    </div>


                    <div class="col-4">
                        <?php
                        $queryproducts = mysqli_query($conn, "SELECT * FROM products WHERE id=3003");
                        $dataproducts = mysqli_fetch_assoc($queryproducts);
                        ?>
                        <?= "<img src='./public/assets/imgDB/" . $dataproducts['image'] . "'class='img-thumbnail rounded-start'>" ?>
                        <p class="text-center mt-3"><?= $dataproducts['name'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#eaeaea" fill-opacity="1" d="M0,160L30,176C60,192,120,224,180,213.3C240,203,300,149,360,138.7C420,128,480,160,540,149.3C600,139,660,85,720,64C780,43,840,53,900,64C960,75,1020,85,1080,106.7C1140,128,1200,160,1260,165.3C1320,171,1380,149,1410,138.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>
    </section>

    <!-- Akhir Galeri -->
    <!-- Akhir Jumbotron -->

    <!-- Awal About -->
    <h1 class="display-4 text-center" id="about">OUR HISTORY</h1>
    <div class="container text-center">
        <p class="lead mb-5">BATRA OFFICIAL is a simple batik holding company founded by two young men from South Sulawesi,
            they see batik as a promising business opportunity and want to preserve batik at the same time. | <strong>Since 2022</strong></p>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <figure class="figure">
                    <img src="public/image/owner/owner1.jpeg" width="400" class="rounded-circle float-start mb-3 img-fluid" alt="Muh nur ilham nurdin">
                    <figcaption class="figure-caption text-center">MUH. NUR ILHAM NURDIN.</figcaption>
                </figure>
            </div>
            <div class="col-4">
                <figure class="figure">
                    <img src="public/image/owner/owner2.jpg" width="400" class="rounded-circle float-start mb-3 img-fluid" alt="Muhammad azis">
                    <figcaption class="figure-caption text-center">MUHAMMAD AZIS.</figcaption>
                </figure>
            </div>
        </div>
    </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#4d2121" fill-opacity="1" d="M0,64L30,53.3C60,43,120,21,180,48C240,75,300,149,360,176C420,203,480,181,540,176C600,171,660,181,720,202.7C780,224,840,256,900,229.3C960,203,1020,117,1080,117.3C1140,117,1200,203,1260,218.7C1320,235,1380,181,1410,154.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>
    </div>
    <!-- Akhir About -->
    <!-- Awal Latest News -->
    <section class="jumbotron text-light">
        <h1 class="display-4 text-center">LATEST NEWS</h1>
        <div class="container text-center">
            <p class="lead mb-5">Temukan berbagai macam berita, konten, event dan promo menarik terkini dari BATRA OFFICIAL.</p>
            <p class="lead mb-5">EXPLORE MORE</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="public/image/promo/promo2.png" class="card-img-top" alt="promo2">
                        <div class="card-body">
                            <p class="judul"><strong>LEBARAN SPECIAL</strong></p>
                            <p class="card-text">Rayakan hari kemenangan pada momen special anda
                                bersama BATRA OFFICIAL, dapatkan program Ramadhan
                                LEBARAN SPECIAL dengan potongan harga <strong>25% All Items.</strong> Selama periode <strong>13 — 14 April 2023.</strong>
                                Segera dapatkan koleksi batik terbaikmu untuk hari raya
                                bersama keluarga dengan mengunjungi BATRA OFFICIAL terdekat.</p>
                            <p>*S&K Berlaku</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="public/image/promo/promo1.png" class="card-img-top" alt="promo1">
                        <div class="card-body">
                            <p class="judul"><strong>INDEPENDENCE DAY</strong></p>
                            <p class="card-text">Happy Independence Day, Buat tean-teman yang sedang merayakan Hari Kemerdekaan ini, jangan bingung mau pakai apa agar tetap terlihat keren, BATRA OFFICIAL memiliki promo menarik diskon hingga <strong>50%</strong> dihari kemerdekaan ini spesial buat teman teman. Selama periode <strong>8-17 Agustus 2023.</strong> Jangan lewatkan promo menarik ini.

                            <p>*S&K Berlaku</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="public/image/promo/promo3.png" class="card-img-top" alt="promo3">
                        <div class="card-body">
                            <p class="judul"><strong>NATIONAL BATIK DAY</strong></p>
                            <p class="card-text">Siapa sih yang gak tau kalau tanggal 2 Oktober adalah hari Batik Nasional, mari rayakan hari batik ini dengan menggunakan Batik.
                            <p>Tapi bingung baju batik belum ada? Tenang BATRA OFFICIAL lagi ngadain promo besar-besaran nih buat teman- teman,<strong> Diskon UP 70%. Selama periode 2-5 Oktober 2023</strong> Yuk pakai Batik.</p>
                            *S&K Berlaku</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#eaeaea" fill-opacity="1" d="M0,128L30,106.7C60,85,120,43,180,69.3C240,96,300,192,360,192C420,192,480,96,540,53.3C600,11,660,21,720,42.7C780,64,840,96,900,101.3C960,107,1020,85,1080,106.7C1140,128,1200,192,1260,224C1320,256,1380,256,1410,256L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Latest News -->

    <!-- Awal Footer -->
    <footer class="pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md3 col-lg-3 col-lx-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">BATRA OFFICAL</h5>
                    <p>BATRA OFFICIAL is a simple batik holding company founded by two young men from South Sulawesi, they see batik as a promising business opportunity and want to preserve batik at the same time.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">Sarung Batik</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">Tas Batik</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">Baju Batik Couple</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">Kain Batik</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful links</h5>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">Home</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">products</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">About</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;" id="Contact">Kontak</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                    <p>
                        <i class="fas fa-home me-3"></i>Yogyakarta, Sleman, Depok, Nologaten
                    </p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>batr.fficial1@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone me-3"><a href="https://wa.me/6282353259571?text=hi%20admin%20I%20want%20to%20ask%20about%20your%20product!">+62 82353259571</a></i>
                    </p>
                    <p>
                        <i class="fas fa-phone me-3"><a href="https://wa.me/6285656804903?text=hi%20admin%20I%20want%20to%20ask%20about%20your%20product!">+62 85656804903</a></i>
                    </p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8 text-md-start">
                    <p>Copyright @2023 All rights reserved by:
                        <a href="#" style="text-decoration: none;">
                            <strong class="text-warning">BATRA OFFICIAL</strong></a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-end">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-whatsapp"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>