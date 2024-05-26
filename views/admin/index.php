<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
</head>

<body>
    <h1>Product List</h1>
    <a href="/products/create">Create New Product</a>
    <ul>
        <?php foreach ($products as $product) : ?>
            <li>
                <?php echo $product['name']; ?> - <?= "<img src='../../image/" . $product['image'] . "'style='width:100px; height:100px;'>" ?> - <?php echo $product['price']; ?>
                <a href="views/admin/product_show?id=<?php echo $product['id']; ?>">View</a>
                <a href="views/admin/product_edit?id=<?php echo $product['id']; ?>">Edit</a>
                <a href="Batra/delete?id=<?php echo $product['id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>