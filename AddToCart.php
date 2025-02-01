<?php

session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

if (!isset($_SESSION['user_id'])) {
    header("Location: Login.php");
    exit;
}
?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookId = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

   
    if (!isset($_SESSION['cart'][$bookId])) {
        $_SESSION['cart'][$bookId] = [
            'id' => $bookId,
            'title' => $title,
            'author' => $author,
            'price' => $price,
            'image' => $image,
        ];
    }

   
    header("Location: MyCart.php");
    exit();
}
?>
