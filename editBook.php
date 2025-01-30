<?php
include_once 'Database.php';
include_once 'Book.php';

$database = new Database();
$connection = $database->getConnection();


$bookRepository = new Book($connection);


if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid book ID."); 
}

$bookId = $_GET['id'];
$book = $bookRepository->getBookById($bookId);

if (!$book) {
    die("Book not found."); 
}


if (isset($_POST['editBtn'])) {
    $id = $_POST['id'];
    $image = trim($_POST['image']);
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $price = trim($_POST['price']);
    $genre = trim($_POST['genre']);


    
    if (empty($image) || empty($title) || empty($author) || empty($price)|| empty($genre)) {
        echo "<p style='color: red;'>All fields are required.</p>";
    // } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     echo "<p style='color: red;'>Invalid email format.</p>";
    } else {

        $success = $bookRepository->updateBook(
            $id,
            $image,
            $title,
            $author,
            $price,
            $genre
        );

        if ($success) {
            header("Location: Dashboard.php");
            exit;
        } else {
            echo "<p style='color: red;'>Failed to update book.</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <h3>Edit Book</h3>
    <form action="" method="post">
        <label>ID</label>
        <input type="text" name="id" value="<?= htmlspecialchars($book['id']) ?>" readonly> <br><br>
        
        <label>Image</label>
        <input type="text" name="image" value="<?= htmlspecialchars($book['image']) ?>"> <br><br>
        
        <label>Title</label>
        <input type="text" name="title" value="<?= htmlspecialchars($book['title']) ?>"> <br><br>
        
        <label>Author</label>
        <input type="text" name="author" value="<?= htmlspecialchars($book['author']) ?>"> <br><br>
        
        <label>Price</label>
        <input type="text" name="price" value="<?= htmlspecialchars($book['price']) ?>"> <br><br>

        <label>Genre</label>
        <select name="genre" id="genre">
            <option value="Unknown" <?php if ($book['genre'] == 'unknown') echo 'selected'; ?>>Unknown</option>
            <option value="Mystery" <?php if ($book['genre'] == 'mystery') echo 'selected'; ?>>Mystery</option>
            <option value="Romance" <?php if ($book['genre'] == 'romance') echo 'selected'; ?>>Romance</option>
            <option value="Sci-Fi" <?php if ($book['genre'] == 'sci-fi') echo 'selected'; ?>>Sci-Fi</option>
            <option value="Fantasy" <?php if ($book['genre'] == 'fantasy') echo 'selected'; ?>>Fantasy</option>
            <option value="Thriller" <?php if ($book['genre'] == 'thriller') echo 'selected'; ?>>Thriller</option>
            <option value="Biography/Autobiography" <?php if ($book['genre'] == 'biography/autobiography') echo 'selected'; ?>>Biography/Autobiography</option>
            <option value="Memoir" <?php if ($book['genre'] == 'memoir') echo 'selected'; ?>>Memoir</option>

        </select><br><br>
        

        <input type="submit" name="editBtn" value="Save Changes"> <br><br>
    </form>
</body>
</html>
