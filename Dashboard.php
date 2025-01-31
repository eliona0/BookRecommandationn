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




</div>
</div>
</body>
</html>
