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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookaxy</title>
    <link rel="stylesheet" href="home.css?<?php echo time(); ?>">
</head>
<body>
   <?php include 'Navbar.php';
   ?>

<div class="header" style="background-image: url('images/header2.webp');" >
    <div class="header-content">
        <h1>"Reading is essential for those who seek to rise above the ordinary." - Jim Rohn</h1>
    <div class="search">
        <input type="text" placeholder="Search by title or author...">
        <button type="submit"><img src="./images/search.png" alt="search "></button>
    </div>
</div>
</div>

<div class="flexbox" style="background-color: rgb(237, 237, 237); margin-top: 0;">

    <h4 style="margin-bottom: 0;">TOP CATEGORIES</h4>
    <h2 style="margin-top: 0;">Explore Categories</h2>

    <div class="flexbox-content" style="margin-bottom: 10px;">
        <div class="categories">
            <div class="c-img">
                <img src="./images/spell-book.png">
            </div>
            <div class="c-text">
                <h3>Fantasy</h3>
                <p>560 books</p>
            </div>
        </div>

        <div class="categories">
            <div class="c-img">
                <img src="./images/book.png">
            </div>
            <div class="c-text">
                <h3>Mystery</h3>
                <p>285 books</p>
            </div>
        </div>

        <div class="categories">
            <div class="c-img">
                <img src="./images/analysis.png ">
            </div>
            <div class="c-text">
                <h3>Business</h3>
                <p>450 books</p>
            </div>
        </div>

        <div class="categories">
            <div class="c-img">
                <img src="./images/hand.png">
            </div>
            <div class="c-text">
                <h3>Finance</h3>
                <p>324 books</p>
            </div>
        </div>


        <div class="categories">
            <div class="c-img">
                <img src="./images/science.png">
            </div>
            <div class="c-text">
                <h3>Science</h3>
                <p>763 books</p>
            </div>
        </div>


        <div class="categories">
            <div class="c-img">
                <img src="./images/chef.png">
            </div>
            <div class="c-text">
                <h3>Cooking</h3>
                <p>217 books</p>
            </div>
        </div>


        <div class="categories">
            <div class="c-img">
                <img src="./images/bookH.png">
            </div>
            <div class="c-text">
                <h3>Horror</h3>
                <p>643 books</p>
            </div>
        </div>


        <div class="categories">
            <div class="c-img">
                <img src="./images/heart.png">
            </div>
            <div class="c-text">
                <h3>Romance</h3>
                <p>512 books</p>
            </div>
        </div>


      
    </div>
    
</div>




<div class="section">
    <div class="carousel">
        <div class="section-content" style="background-color: #ffcbca;">
            <div class="col-4">
                <h4>EDITOR CHOICE</h4>
                <h1>Top 10 Books To Make It A Great Year</h1>
                <button type="button">Shop Now</button>
            </div>
            <div class="col-4">
                <img src="./images/section-image.jpg" alt="Slide 1">
            </div>
        </div>
        <div class="section-content" style="background-color: #b7efee;">
            <div class="col-4">
                <h4>EDITOR CHOICE</h4>
                <h1>The 21 Best Science Fiction Books Of All Time</h1>
                <button type="button">Shop Now</button>
            </div>
            <div class="col-4">
                <img src="./images/slide2.webp" alt="Slide 2">
            </div>
        </div>
        <div class="section-content" style="background-color: #384c60;">
            <div class="col-4">
                <h4 style="color: #fff;">EDITOR CHOICE</h4>
                <h1 style="color: #fff;">The Most Collectible Female Authors</h1>
                <button type="button">Shop Now</button>
            </div>
            <div class="col-4">
                <img src="./images/slidee3.webp" alt="Slide 3">
            </div>
        </div>
    </div>
    <div class="carousel-dots"></div>
</div>









<div class="flexbox">
    <h2 style="color: coral; font-size: 30px;">Best Sellers</h2>
    <div class="flexbox-content" id="book-flexbox">
        <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/bestSellers1.webp" alt="Main Street Millionaire">
        </div>
        <div class="book-info">
        <h3>Main Street Millionaire</h3>
        <p>Codie Sanchez</p>
        <h5>$27.90</h5>
        </div>
    </div>
        <!-- <div class="add-to-cart" id="cart1">
            <button type="submit">ADD TO CART</button>
        </div> -->
    </div>

    <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/bestSellers2.webp" alt="Everything Is Tuberculosis">
        </div>
        <div class="book-info">
            <h3>Everything Is Tuberculosis</h3>
            <p>John Green</p>
            <h5>$26.04</h5>
            </div>
        </div>
        </div>

        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
            <img src="./images/bestSellers3.webp" alt="Foxhole">
        </div>
        <div class="book-info">
            <h3>Foxhole</h3>
            <p>George K. Mullins</p>
            <h5>$11.16</h5>
            </div>
        </div>
        </div>


        <div class="flexbox-item">
            <div class="the80"> 
            <div class="img">
            <img src="./images/bestSellers4.jpg" alt="The Serviceberry">
        </div>
        <div class="book-info">
            <h3>The Serviceberry</h3>
            <p>Robin Wall Kimmerer</p>
            <h5>$23.94</h5>
            </div>
        </div>
        </div>


        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
                <img src="./images/bestSellers5.jpg" alt="The Message">
            </div>
            <div class="book-info">
                <h3>The Message</h3>
                <p>Ta-Nehisi Coates</p>
                <h5>$18.60</h5>
            </div>
        </div>
        </div>
</div>
</div>


    <div class="review">
        <div class="section-content" style="background-color: white;">
            <div class="user-image">
                <div class="user-image-img">
                <img src="./images/Emily R..webp" >
            </div>
            </div>
            <div class="user-review">
                <h1>Great Book Review Experience!</h1>
                <img src="./images/star.png" style="width: 20px;">
                <img src="./images/star.png" style="width: 20px;">
                <img src="./images/star.png" style="width: 20px;">
                <img src="./images/star.png" style="width: 20px;">
                <img src="./images/star.png" style="width: 20px;">
                <p>I love how easy it is to explore books on this site! The preview is simple yet effective, and the audio sample helped me decide if I wanted to buy the book. Definitelya go-to place for discovering new reads. Would highly recommend!</p>
            <h5>Emily R.</h5>
            </div>
        </div>
    </div>

    <!-- <div id="login-box">
        <div class="login-container">
            <form class="form">
                <label>Log In</label>
                <img class="LoginIcon" src="./images/loginiconn.png" alt="Log In Icon">
            <div class="username-password">
                <input type="username" name="Username" class="form-input" id="username" placeholder="Username">
            </div>
            <div class="username-password">
                <input type="password" name="Password" class="form-input" id="password" placeholder="Password">
            </div>
                <p>Dont Have An Account?</p>
                <button type="button" onclick="openSignUp()">Sign Up</button>
                <button type="button" onclick="openLogin()" id="login-btn">Log in</button>
            </form>
        </div>
    </div> -->

  

    <!-- <div id="signup-box">
        <div class="signin-container">
        <form class="form">
            <label class="label1">Sign Up</label>
            <div class="klientsdata">
                <input type="text" name="Name" class="form-input" id="name" placeholder="Name" required>
            </div>
            <div class="klientsdata">
                <input type="text" name="Surname" class="form-input" id="surname" placeholder="Surname" required>
            </div>
            <div class="klientsdata">
                <input type="email" name="Email" class="form-input" id="email" placeholder="Email" required>
            </div>
            <div class="klientsdata">
                <input type="password" name="Password" class="form-input" id="password" placeholder="Password" required>
            </div>
            <div class="klientsdata">
                <input type="password" name="Confirm Password" class="form-input" id="confirmpassword" placeholder="Confirm Password" required>
            </div>
            <div class="klientsdata">
                <input type="number" name="Phone number" class="form-input" id="phonenumber" placeholder="Phone number" required>
            </div>
            <label class="label2">
                <input type="checkbox" style="width: 20px;" id="checkbox">I have read and agree to the Terms of Service and Privacy Policy.
            </label>
            <button onclick="openLogin()" id="signin-btn">Sign In</button>
        </form>
        </div>
        </div> -->



<div class="last-section-wrapper">
    <div class="last-section">
        <div class="last-section-card">
            <div class="main-part">
                <img src="./images/store.png">
                <h3>268</h3>
            </div>
            <p>Our stores around the world</p>
        </div>
        <div class="last-section-card">
            <div class="main-part">
                <img src="./images/customer.png">
                <h3>25,634</h3>
            </div>
            <p>Our happy costumers</p>
        </div>
        <div class="last-section-card">
            <div class="main-part">
                <img src="./images/bookk.png">
                <h3>68+k</h3>
            </div>
            <p>Book Collections</p>
        </div>
    </div>
</div>


<?php include 'Footer.php';
   ?>

  <script src="home.js">
    </script>
</body>
</html>