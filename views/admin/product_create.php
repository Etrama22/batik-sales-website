<!DOCTYPE html>
<html>

<head>
    <title>Create Product</title>
</head>

<body>
    <h1>Create Product</h1>
    <form action="/products/create" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>
        <label for="image">Image:</label>
        <input type="text" id="image" name="image" required><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br>
        <input type="submit" value="Create">
    </form>
    <a href="/products">Back to List</a>
</body>

</html>