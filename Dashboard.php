<?php

session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

if (!isset($_SESSION['user_id']) || $_SESSION['username'] !== 'admin') {
    header("Location: Login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="dashboard-tables" style="width: 100%; justify-items: center;">
        <div class="content" style="width: 80%">
            <div class="margin" style="height: 60px; "></div>
            <h2>USERS</h2>
            <table style="margin-top:30px;" border="1">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>SURNAME</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>PASSWORD</th> 
                    <th>Edit</th> 
                    <th>Delete</th> 
                </tr>

                <?php 
                    include_once 'Database.php';
                    include_once 'User.php';

                    $database = new Database();
                    $connection = $database->getConnection();

                    $userRepository = new User($connection);

                    
                    $users = $userRepository->getAllUsers();

                    
                    foreach($users as $user){
                        echo "
                        <tr>
                            <td>{$user['id']}</td>
                            <td>{$user['name']}</td>
                            <td>{$user['surname']}</td>
                            <td>{$user['username']}</td>
                            <td>{$user['email']}</td>
                            <td>{$user['phone']}</td>
                            <td>{$user['password']}</td>
                            <td><a href='editUser.php?id={$user['id']}'>Edit</a></td>
                            <td><a href='deleteUser.php?id={$user['id']} onclick='return confirm(\"Are you sure?\")'>Delete</a></td>
                        </tr>
                        ";
                    }
                ?>
            </table>


            <div style="margin-bottom: 20px;">
                <h2>BOOKS</h2>
                    <a href="AddBook.php">Add Another Book</a>
                </div>

                <table border="1" style="text-align:center;">
                    <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>TITLE</th>
                        <th>AUTHOR</th>
                        <th>PRICE</th>
                        <th>GENRE</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    <?php 
                        include_once 'Database.php';
                        include_once 'Book.php';

                        $database = new Database();
                        $connection = $database->getConnection();
                        $bookRepository = new Book($connection);
                        $books = $bookRepository->getAllBooks();

                        if (count($books) > 0) {
                            foreach ($books as $book) {
                                echo "
                                <tr>
                                    <td>{$book['id']}</td>
                                    <td ><img style='width: 100px; height: auto;' src='{$book['image']}' alt='Book Image'></td>
                                    <td>{$book['title']}</td>
                                    <td>{$book['author']}</td>
                                    <td>{$book['price']}</td>
                                    <td>{$book['genre']}</td>
                                    <td><a href='editBook.php?id={$book['id']}'>Edit</a></td>
                                    <td><a href='deleteBook.php?id={$book['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No books available.</td></tr>";
                        }
                    ?>
                </table>


            <div style="margin-bottom: 20px;"></div>
            <h2>CONTACT FORMS</h2>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>SUBJECT</th>
                    <th>MESSAGE</th>
                    <th>USERNAME</th>
                    <th>Delete</th>
                </tr>

                <?php 
                    include_once 'Database.php';
                    include_once 'Contact.php';

                    $database = new Database();
                    $connection = $database->getConnection();
                    $contactRepository = new Contact($connection);
                    $contacts = $contactRepository->getAllContact();

                    if (count($contacts) > 0) {
                        foreach ($contacts as $contact) {
                            echo "
                            <tr>
                                <td>{$contact['id']}</td>
                                <td>{$contact['name']}</td>
                                <td>{$contact['email']}</td>
                                <td>{$contact['phone']}</td>
                                <td>{$contact['subject']}</td>
                                <td>{$contact['message']}</td>
                                <td>{$contact['username']}</td> <!-- Shows the user who sent the message -->
                                <td><a href='deleteContact.php?id={$contact['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No contact messages available.</td></tr>";
                    }
                ?>
            </table>

            <div style="margin-bottom: 20px;"></div>
            <h2>PAYMENTS</h2>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>
                    <th>CARD NUMBER</th>
                    <th>TOTAL</th>
                    <th>PAYMENT DATE</th>
                    <th>Delete</th>



                </tr>

                <?php 
                    include_once 'Database.php';
                    $database = new Database();
                    $connection = $database->getConnection();

                    $query = "SELECT * FROM payments ORDER BY id DESC";
                    $stmt = $connection->prepare($query);
                    $stmt->execute();
                    $payments = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    if (count($payments) > 0) {
                        foreach ($payments as $row) {
                            echo "
                            <tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['address']}</td>
                                <td>**** **** **** " . substr($row['card_number'], -4) . "</td>
                                <td>{$row['total']}</td>
                                <td>{$row['created_at']}</td>
                                <td><a href='deletePayment.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No payments recorded.</td></tr>";
                    }
                ?>
            </table>


            <div style="margin-bottom: 20px;"></div>
                <h2>ORDER ITEMS</h2>
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>PAYMENT ID</th>
                        <th>BOOK ID</th>
                        <th>BOOK TITLE</th>
                        <th>AUTHOR</th>
                        <th>PRICE</th>
                        <th>ORDER DATE</th>
                        <th>Delete</th>

                    </tr>

                    <?php 
                        include_once 'Database.php';
                        $database = new Database();
                        $connection = $database->getConnection();
                    
                        $query = "SELECT * FROM order_items ORDER BY id DESC";
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                        $orderItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                        if (count($orderItems) > 0) {
                            foreach ($orderItems as $item) {
                                echo "
                                <tr>
                                    <td>{$item['id']}</td>
                                    <td>{$item['payment_id']}</td>
                                    <td>{$item['book_id']}</td>
                                    <td>{$item['title']}</td>
                                    <td>{$item['author']}</td>
                                    <td>$" . number_format($item['price'], 2) . "</td>
                                    <td>{$item['created_at']}</td>
                                    <td><a href='deleteOrder.php?id={$item['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>

                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8'>No order items available.</td></tr>";
                        }
                    ?>
                </table>

    </div>
    </div>
    </body>
    </html>
