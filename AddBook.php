<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookaxy</title>
</head>
<body>
<h3>Add Book</h3>
<form action="" method="post" enctype="multipart/form-data">
        <!-- <input type="text" name="name" class="form-input" id="name" placeholder="Name" required> -->
        
        <label>Image</label>
        <input type="file" name="image" id="image" required> <br><br>
        
        <label>Title</label>
        <input type="text" name="title" id="title" placeholder="Title" required> <br><br>
        
        <label>Author</label>
        <input type="text" name="author" id="author" placeholder="Author" required> <br><br>
        
        <label>Price</label>
        <input type="text" name="price" id="price" placeholder="Price" required> <br><br>

        <label>Genre</label>
        <select name="genre" id="genre">
        <option value="Unknown" selected>Unknown</option>
        <option value="Mystery">Mystery</option>
        <option value="Romance">Romance</option>
        <option value="Sci-fi">Sci-Fi</option>
        <option value="Fantasy">Fantasy</option>
        <option value="Thriller">Thriller</option>
</select><br><br>
        

        <input type="submit" name="addBtn" value="Add Book"> <br><br>
    </form>
</body>
</html>



<?php 
include_once 'Database.php';
include_once 'Book.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $book = new Book($connection);

    // Ensure "uploads/" directory exists
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true); // Create directory if not exists
    }

    // Handle Image Upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageFileType = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        $image_name = uniqid() . '.' . $imageFileType; // Generate a unique filename
        $target_file = $target_dir . $image_name;

        // Move the uploaded file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image = $target_file; // Save the file path to store in the database
        } else {
            die("Error uploading image.");
        }
    } else {
        die("No image selected or upload error.");
    }

    // Get other form data
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $price = htmlspecialchars($_POST['price']);
    $genre = htmlspecialchars($_POST['genre']);


    // Add Book
    if ($book->addBook($image, $title, $author, $price, $genre)) {
        header("Location: Dashboard.php"); // Redirect to Dashboard
        exit;
    } else {
        echo "Error adding book!";
    }
}
?>
