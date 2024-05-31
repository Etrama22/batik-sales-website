<?php
require './config/database.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="back" style="background-color:#4D2121;">
        <div class="container bg-danger d-flex justify-content-center position-absolute top-50 start-50 translate-middle">
            <div class="card mb-3 w-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <?= "<img src='./../public/assets/imgDB/" . $product['image'] . "'style='width:420px;' class='img-fluid rounded-start' >" ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Details</h5>
                            <p class="card-text">Name :<?= $product['name'] ?> </p>
                            <p class="card-text">Price :<?= $product['price'] ?> </p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non voluptatem excepturi ipsum maxime, neque id saepe officiis dolore laboriosam fugit. Corrupti doloremque maxime voluptatem molestias, tenetur provident ipsa, mollitia obcaecati repellendus illo non nihil reiciendis sequi officiis culpa quis accusantium, eaque ex modi! Laudantium quaerat ratione architecto officia magni eveniet delectus hic quos fugit? Eius harum illum in numquam reprehenderit eos soluta quisquam quae nulla nemo fugit maxime totam nobis consequuntur, nihil autem. Esse minima sapiente magni repudiandae veniam officia similique debitis, repellat in voluptatem quo error necessitatibus. Rerum, accusamus! Veritatis iusto provident vitae explicabo eaque est quaerat. Voluptatum unde excepturi modi, autem possimus earum non consectetur expedita nihil adipisci aliquam, dolor veritatis laudantium minus in provident! Ad a esse error ducimus autem aliquam voluptas est iste maiores corrupti odit explicabo fuga consectetur minus nisi reprehenderit, expedita at itaque qui molestiae odio quidem repudiandae similique dolores? Magnam nisi dolorum, rem totam libero voluptas quo deleniti aspernatur pariatur nesciunt autem accusantium nihil laboriosam magni nulla quae eveniet, natus minus tenetur non, animi sunt ipsa? Beatae veritatis dicta itaque, facilis culpa laboriosam similique aperiam enim non aliquam praesentium ad vitae molestias! Eius molestiae voluptatibus delectus odit sequi hic eligendi officiis quae explicabo?</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="/Batra/admin">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>