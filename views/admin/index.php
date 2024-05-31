<?php
require './config/database.php';

$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    <style>
        img {
            width: 100px;
            height: 100px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Product List</h1>
    <table border="1" class="table table-bordered table-striped text-light">
        <thead>
            <tr>
                <th><i class="fa-regular fa-hashtag me-1"></i>ID</th>
                <th><i class="fa-sharp fa-solid fa-file-signature me-1"></i>Nama</th>
                <th><i class="fa-solid fa-image me-1"></i>Pict</th>
                <th><i class="fa-sharp fa-solid fa-tags me-1"></i>Harga</th>
                <th><i class="fa-solid fa-gears me-1"></i>Aksi</th>
            </tr>
        </thead>
        <?php
        while ($products = mysqli_fetch_array($result)) {
        ?>
            <tr class="text-light">
                <td>
                    <?php echo $products['id']; ?>
                </td>
                <td>
                    <?php echo $products['name']; ?>
                </td>
                <td>
                    <?= "<img src='./public/assets/imgDB/" . $products['image'] . "'style='width:100px; height:100px;'>" ?>
                </td>
                <td>
                    <?php echo $products['price']; ?>
                </td>
                <td>
                    <a href="/Batra/admin/show?id=<?php echo htmlspecialchars($products['id'], ENT_QUOTES, 'UTF-8'); ?>">View</a>
                    <a href="/Batra/admin/edit?id=<?php echo htmlspecialchars($products['id'], ENT_QUOTES, 'UTF-8'); ?>">Edit</a>
                    <a href="/Batra/delete?id=<?php echo htmlspecialchars($products['id'], ENT_QUOTES, 'UTF-8'); ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="/Batra/admin/create">Create New Product</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>