<link rel="stylesheet" href="navbar.css"/>
<?php
echo '
 <div class="navbar">
        <img src="./images/logo.jpg" alt="logo">
        <a style="font-size: 22px;" class="a1" href="#"><em>Bookaxy</em></a>
    
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
                    <a href="#">Historical Fiction </a>
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
                        <a href="#">Travel </a>
                        <a href="#">Cooking/Food</a>
                        <a href="#">Business/Finance</a>

                    </div>
            </div>
        <p><a href="ContactUs.php">Contact Us</a></p>
        <p><a href="MyCart.php">My Cart</a></p>
        <!-- <button type="button" onclick="openLogin()"><a href="Login.html">Log In</a></button> -->
        <button type="button"><a href="logout.php">Logout</a></button>
    
        
        
    </div>
<div class="hamburger-menu">
    <button type="button"><img src="./images/menu.png"></button>
</div>
</div>'
?>
