<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<link rel="stylesheet" href="navbar.css?<?php echo time(); ?>" />

<div class="navbar">
    <img src="./images/logo.jpg" alt="logo">
    <a href="Home.php" class="a1"><em>Bookaxy</em></a>

    <div class="links">
        <div class="dropdown">
            <a href="Fiction.php">Fiction</a>
            <div class="dropdown-content">
                <a href="Mystery.php">Mystery</a>
                <a href="Thriller.php">Thriller</a>
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
            <a href="NonFiction.php">NonFiction</a>
            <div class="dropdown-content">
                <a href="BiographyAutobiography.php">Biography/Autobiography</a>
                <a href="Memoir.php">Memoir</a>
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

        <?php
        // $currentPage = basename($_SERVER['PHP_SELF']);  
        // if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') { 
        //     echo '<p><a href="Dashboard.php" class="' . ($currentPage == 'Dashboard.php' ? 'active' : '') . '">Dashboard</a></p>';
        // }

        if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin'): ?>
            <p><a href="Dashboard.php">Dashboard</a></p>
        <?php endif; ?>
        

        <button type="button"><a href="logout.php">Logout</a></button>
        
    </div>
    <div class="responsive-navbar">
        <button type="button" onclick="toggleNavbar()"><img style="border-radius:0px; width:30px;" src="./images/menu.png"></button>
        </div>
</div>

<script>
    function toggleNavbar() {
        const links = document.querySelector('.links');
        links.classList.toggle('show');
    }
</script>
