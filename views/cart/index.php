<?php
// views/users/cart.php
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+GYp1yD1CZLQ4RYY3xZbIDwodRTIIXAjXKhMZjJ" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1>Your Cart</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Model Option</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($cartItems)) : ?>
                    <tr>
                        <td colspan="7">Your cart is empty.</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($cartItems as $item) : ?>
                        <tr>
                            <td><img src="./public/assets/imgDB/<?= htmlspecialchars($item['image']) ?>" style="width: 100px;"></td>
                            <td><?= htmlspecialchars($item['name']) ?></td>
                            <td><?= htmlspecialchars($item['model_option']) ?></td>
                            <td>
                                <form action="/Batra/cart/update" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($item['product_id']) ?>">
                                    <input type="hidden" name="model_option" value="<?= htmlspecialchars($item['model_option']) ?>">
                                    <input type="number" name="quantity" value="<?= htmlspecialchars($item['quantity']) ?>" min="1" class="form-control d-inline w-auto">
                                    <input type="hidden" name="price" value="<?= htmlspecialchars($item['price']) ?>">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </td>
                            <td><?= htmlspecialchars($item['price']) ?></td>
                            <td><?= htmlspecialchars($item['total']) ?></td>
                            <td>
                                <form action="/Batra/cart/remove" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($item['product_id']) ?>">
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <a href="/Batra/menu" class="btn btn-secondary">Continue Shopping</a>
    </div>
    <script>
        // Add any necessary JavaScript for dynamic updates here
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>