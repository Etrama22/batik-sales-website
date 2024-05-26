<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>
    <form action="/products/edit?id=<?php echo $product['id']; ?>" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $product['nama']; ?>" required><br>
        <label for="image">Image:</label>
        <input type="text" id="image" name="image" value="<?php echo $product['image']; ?>" required><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="<?php echo $product['price']; ?>" required><br>
        <input type="submit" value="Update">
    </form>
    <a href="/products">Back to List</a>
</body>

</html>