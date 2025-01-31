<?php
session_start();
include_once 'Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $name = htmlspecialchars(strip_tags($_POST['name']));
        $email = htmlspecialchars(strip_tags($_POST['email']));
        $address = htmlspecialchars(strip_tags($_POST['address']));
        $card_number = htmlspecialchars(strip_tags($_POST['card_number']));

        $database = new Database();
        $connection = $database->getConnection();

        $query = "INSERT INTO payments (name, email, address, card_number) VALUES (:name, :email, :address, :card_number)";
        $stmt = $connection->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':card_number', $card_number);

        if ($stmt->execute()) {
            unset($_SESSION['cart']);

            header("Location: mycart.php?payment=success");
            exit();
        } else {
            echo "Error processing payment.";
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
?>
