<?php
class Cart
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function createCart()
    {
        $sql = "INSERT INTO cart (product_id, quantity, price, model_option) VALUES (NULL, 0, 0, '')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }

    public function addToCart($id, $productId, $quantity, $price, $modelOption)
    {
        $sql = "INSERT INTO cart (product_id, quantity, price, model_option) VALUES (:productId, :quantity, :price, :modelOption)
                ON DUPLICATE KEY UPDATE quantity = quantity + :quantity";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':productId', $productId);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':modelOption', $modelOption);
        $stmt->execute();
    }

    public function getCartItems($id)
    {
        $sql = "SELECT * FROM cart WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateCartItem($id, $productId, $quantity, $modelOption)
    {
        $sql = "UPDATE cart SET quantity = :quantity, model_option = :modelOption WHERE id = :id AND product_id = :productId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':modelOption', $modelOption);
        $stmt->bindParam(':cartId', $id);
        $stmt->bindParam(':productId', $productId);
        $stmt->execute();
    }

    public function removeFromCart($id, $productId)
    {
        $sql = "DELETE FROM cart WHERE id = :id AND product_id = :productId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':productId', $productId);
        $stmt->execute();
    }
}
