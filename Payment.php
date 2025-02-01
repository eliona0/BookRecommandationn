<?php
session_start();
include_once 'Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (empty($_SESSION['cart'])) {
            die("Your cart is empty.");
        }

        $name = htmlspecialchars(strip_tags($_POST['name']));
        $email = htmlspecialchars(strip_tags($_POST['email']));
        $address = htmlspecialchars(strip_tags($_POST['address']));
        $card_number = htmlspecialchars(strip_tags($_POST['card_number']));
        $total = array_sum(array_column($_SESSION['cart'], 'price')); 

        $database = new Database();
        $connection = $database->getConnection();

        
        $connection->beginTransaction();

        
        $query = "INSERT INTO payments (name, email, address, card_number, total) VALUES (:name, :email, :address, :card_number, :total)";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':card_number', $card_number);
        $stmt->bindParam(':total', $total);
        $stmt->execute();

        $payment_id = $connection->lastInsertId();

        $query = "INSERT INTO order_items (payment_id, book_id, title, author, price) VALUES (:payment_id, :book_id, :title, :author, :price)";
        $stmt = $connection->prepare($query);

        foreach ($_SESSION['cart'] as $cartItem) {
            $stmt->bindParam(':payment_id', $payment_id);
            $stmt->bindParam(':book_id', $cartItem['id']);
            $stmt->bindParam(':title', $cartItem['title']);
            $stmt->bindParam(':author', $cartItem['author']);
            $stmt->bindParam(':price', $cartItem['price']);
            $stmt->execute();
        }

       
        $connection->commit();

       
        unset($_SESSION['cart']);


        header("Location: mycart.php?payment=success");
        exit();
    } catch (PDOException $e) {
        $connection->rollBack();
        echo "Database error: " . $e->getMessage();
    }
}
?>

