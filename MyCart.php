<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="mycart.css?v=<?php echo time(); ?>">
</head>
<body>
<?php
session_start();
include 'Navbar.php';

$total = 0;
?>

<div class="my-cart-container">
    <div class="my-cart-content">
        <h1 style="color: #e38c52;">My Cart</h1>

        <?php if (!empty($_SESSION['cart'])): ?>
            <?php foreach ($_SESSION['cart'] as $cartItem): ?>
                <div class="my-cart-item">
                    <div class="my-cart-image">
                        <img src="<?php echo htmlspecialchars($cartItem['image']); ?>" alt="Book Image">
                    </div>
                    <div class="my-cart-desc">
                        <h2><?php echo htmlspecialchars($cartItem['title']); ?></h2>
                        <p style="font-weight: 600; font-size: 20px;">By <?php echo htmlspecialchars($cartItem['author']); ?></p>
                        <h5>$<?php echo number_format($cartItem['price'], 2); ?></h5>

                        <form action="removeFromCart.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $cartItem['id']; ?>">
                            <button type="submit" class="remove">Remove</button>
                        </form>
                    </div>
                    <?php $total += $cartItem['price']; ?> 
                </div>
            <?php endforeach; ?>
            
            
            <div class="my-cart-total" style="margin-top: 50px;">
                <h1>Total: $<?php echo number_format($total, 2); ?></h1>
            </div>

            <form action="Payment.php" method="POST">
                <h2>Payment Information</h2>
                <input type="text" name="name" required placeholder="Full Name"><br><br>
                <input type="email" name="email" required placeholder="Email"><br><br>
                <input name="address" required placeholder="Address"></input><br><br>
                <input type="text" name="card_number" maxlength="16" required placeholder="Card Number"><br><br>

                <input type="hidden" name="total" value="<?php echo $total; ?>"> 
                <button type="submit" id="buy">Buy</button>
            </form>
        <?php else: ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
    </div>
</div>

<?php include 'Footer.php'; ?>


</body>
</html> 