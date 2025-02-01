<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid Order ID");
}

$orderId = $_GET['id'];

include_once 'Database.php';

$database = new Database();
$connection = $database->getConnection();

try {

    $query = "DELETE FROM order_items WHERE payment_id = :orderId";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':orderId', $orderId, PDO::PARAM_INT);
    $stmt->execute();


    $query = "DELETE FROM payments WHERE id = :orderId";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':orderId', $orderId, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: Dashboard.php");
        exit;
    } else {
        echo "Error deleting order.";
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
