<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid Payment ID");
}

$paymentId = $_GET['id'];

include_once 'Database.php';

$database = new Database();
$connection = $database->getConnection();

try {
    $query = "DELETE FROM payments WHERE id = :paymentId";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':paymentId', $paymentId, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        header("Location: Dashboard.php");
        exit;
    } else {
        echo "Error deleting payment.";
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
