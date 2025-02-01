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
require_once 'Database.php';  
require_once 'Book.php';

$db = new Database();
$conn = $db->getConnection(); 

$book = new Book($conn);
$books = $book->getAllBooks(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="thriller.css">
    <title>Fiction-Thriller</title>
</head>
<body>
<?php include 'Navbar.php';
   ?>


<div class="thriller-container">
    <div class="thriller-content">
        <h1 style="color: #e38c52; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Thriller</h1>
        
        <?php foreach ($books as $book): ?>
            <?php if (strtolower($book['genre']) === 'thriller'): ?>
                <div class="thriller-item">
                    <div class="thriller-image">
                        <img src="<?php echo htmlspecialchars($book['image']); ?>" alt="<?php echo htmlspecialchars($book['title']); ?>">
                    </div>
                    <div class="thriller-desc">
                        <h2><?php echo htmlspecialchars($book['title']); ?></h2>
                        <p style="font-weight: 600; font-size: 20px;">By <?php echo htmlspecialchars($book['author']); ?></p>                   
                        <h5>$<?php echo number_format($book['price'], 2); ?></h5>
                        <form action="AddToCart.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
                            <input type="hidden" name="title" value="<?php echo htmlspecialchars($book['title']); ?>">
                            <input type="hidden" name="author" value="<?php echo htmlspecialchars($book['author']); ?>">
                            <input type="hidden" name="price" value="<?php echo $book['price']; ?>">
                            <input type="hidden" name="image" value="<?php echo htmlspecialchars($book['image']); ?>">
                            <button type="submit" class="add-to-cart">ADD TO CART</button>
                        </form>


                    </div>
                </div>  
            <?php endif; ?>
        <?php endforeach; ?>
        
    </div>  
</div>   
        
    </div>  
</div>            
          
        


<?php include 'Footer.php';
   ?>
</body>
</html>