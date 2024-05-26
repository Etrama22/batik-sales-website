<!DOCTYPE html>
<html>

<head>
    <title>Product Detail</title>
</head>

<body>
    <h1><?php echo $product['name']; ?></h1>
    <p>Price: <?php echo $product['price']; ?></p>
    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['nama']; ?>">
    <a href="/products">Back to List</a>
</body>

</html>