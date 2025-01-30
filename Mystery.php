<?php
require_once 'Database.php';  
require_once 'Book.php';

$db = new Database();
$conn = $db->getConnection(); // Ensure you get the connection

$book = new Book($conn);
$books = $book->getAllBooks();  // Fetch books

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystery.css">
    <title>Fiction-Mystery</title>
</head>
<body>
<?php include 'Navbar.php';
   ?>


<div class="mystery-container">
    <div class="mystery-content">
        <h1 style="color: #e38c52; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Mystery</h1>
        
        <?php foreach ($books as $book): ?>
            <?php if (strtolower($book['genre']) === 'mystery'): ?>
                <div class="mystery-item">
                    <div class="mystery-image">
                        <img src="<?php echo htmlspecialchars($book['image']); ?>" alt="<?php echo htmlspecialchars($book['title']); ?>">
                    </div>
                    <div class="mystery-desc">
                        <h2><?php echo htmlspecialchars($book['title']); ?></h2>
                        <p style="font-weight: 600; font-size: 20px;">By <?php echo htmlspecialchars($book['author']); ?></p>                   
                        <h5>$<?php echo number_format($book['price'], 2); ?></h5>
                        <button id="add-to-cart">ADD TO CART</button>
                    </div>
                </div>  
            <?php endif; ?>
        <?php endforeach; ?>
        
    </div>  
</div>            
          
        


<?php include 'Footer.php';
   ?>
</body>
</html>