<?php
// Start session at the very top of the script (before any HTML or echo output)
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Only start the session if it's not already active
}

echo '
<link rel="stylesheet" href="navbar.css"/>
<div class="navbar">
    <img src="./images/logo.jpg" alt="logo">
    <a style="font-size: 22px;" class="a1" href="Home.php"><em>Bookaxy</em></a>

    <div class="links">
        <div class="dropdown">
            <a href="Fiction.php">Fiction</a><br>
            <div class="dropdown-content">
                <a href="#">Mystery</a>
                <a href="#">Thriller</a>
                <a href="#">Fantasy</a>
                <a href="#">Romance</a>
                <a href="#">Horror</a>
                <a href="#">Adventure</a>
                <a href="#">Science Fiction (Sci-Fi)</a>
                <a href="#">Historical Fiction</a>
                <a href="#">Young Adult (YA)</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="NonFiction.php">NonFiction</a><br>
            <div class="dropdown-content">
                <a href="#">Biography/Autobiography</a>
                <a href="#">Memoir</a>
                <a href="#">Self-Help</a>
                <a href="#">History</a>
                <a href="#">Science & Nature</a>
                <a href="#">True Crime</a>
                <a href="#">Philosophy</a>
                <a href="#">Travel</a>
                <a href="#">Cooking/Food</a>
                <a href="#">Business/Finance</a>
            </div>
        </div>
        <p><a href="ContactUs.php">Contact Us</a></p>
        <p><a href="MyCart.php">My Cart</a></p>
';

$currentPage = basename($_SERVER['PHP_SELF']);  
if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') { 
    echo '<p><a href="Dashboard.php" class="' . ($currentPage == 'Dashboard.php' ? 'active' : '') . '" >Dashboard</a></p>';
}

echo '
<button type="button"><a href="logout.php">Logout</a></button>
</div>
<div class="hamburger-menu">
    <button type="button"><img src="./images/menu.png"></button>
</div>
</div>';
?>
