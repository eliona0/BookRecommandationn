<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookId = $_POST['id'];

    if (isset($_SESSION['cart'][$bookId])) {
        unset($_SESSION['cart'][$bookId]);
    }

    // Redirect back to MyCart.php
    header("Location: MyCart.php");
    exit();
}
?>
