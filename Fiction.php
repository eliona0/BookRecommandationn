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
    <title>Bookaxy-Fiction</title>
    <link rel="stylesheet" href="fiction.css?<?php echo time(); ?>">
</head>
<body>
<?php include 'Navbar.php';
   ?>

<div class="general-flexbox">
    <!-- mystery -->
<div class="flexbox">
    <h2 style="color: coral; font-size: 30px;">Mystery</h2>
    <div class="flexbox-content" id="book-flexbox">
        <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/mystery1.jpg" alt="Games Untold">
        </div>
        <div class="book-info">
        <h3>Games Untold</h3>
        <p>Jennifer Lynn</p>
        <h5>$23.99</h5>
        </div>
    </div>
        <div class="add-to-cart">
            <button>ADD TO CART</button>
        </div>
    </div>

    <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/mystery2.jpg" alt="The Teller Of Small Fortunes">
        </div>
        <div class="book-info">
            <h3>The Teller Of Small Fortunes</h3>
            <p>Julie Leong</p>
            <h5>$20.19</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>

        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
            <img src="./images/mystery3.jpg" alt="The Lake Of Lost Girls">
        </div>
        <div class="book-info">
            <h3>The Lake Of Lost Girls</h3>
            <p>Katherine Greene</p>
            <h5>$15.26</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80"> 
            <div class="img">
            <img src="./images/mystery4.jpg" alt="The Serviceberry">
        </div>
        <div class="book-info">
            <h3>The Mirror:The lost BrideTrilogy - Book 2</h3>
            <p>Nora Roberts</p>
            <h5>$30.94</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
                <img src="./images/mystery5.jpg" alt="Deadly Animals">
            </div>
            <div class="book-info">
                <h3>Deadly Animals</h3>
                <p>Marie Tierney</p>
                <h5>$18.99</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>



<!-- Thriller -->
<div class="flexbox">
    <h2 style="color: coral; font-size: 30px;">Thriller</h2>
    <div class="flexbox-content" id="book-flexbox">
        <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/thriller1.jpg" alt="The Housemaid's Wedding">
        </div>
        <div class="book-info">
        <h3>The Housemaid's Wedding</h3>
        <p>Freida McFaden</p>
        <h5>$32.99</h5>
        </div>
    </div>
        <div class="add-to-cart">
            <button>ADD TO CART</button>
        </div>
    </div>

    <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/thriller2.jpg" alt="Heist Royale">
        </div>
        <div class="book-info">
            <h3>Heist Royale</h3>
            <p>Kayvion Lewis</p>
            <h5>$22.19</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>

        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
            <img src="./images/thriller3.jpg" alt="I Am The Dark">
        </div>
        <div class="book-info">
            <h3>I Am The Dark</h3>
            <p>Jamison Shea</p>
            <h5>$17.99</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80"> 
            <div class="img">
            <img src="./images/thriller4.jpg" alt="The Estate">
        </div>
        <div class="book-info">
            <h3>The Estate</h3>
            <p>Sarah Jost</p>
            <h5>$29.99</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
                <img src="./images/thriller5.jpg" alt="An Insignificant Case">
            </div>
            <div class="book-info">
                <h3>An Insignificant Case</h3>
                <p>Phillip Margolin</p>
                <h5>$15.00</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>



<!-- Fantasy -->
<div class="flexbox">
    <h2 style="color: coral; font-size: 30px;">Fantasy</h2>
    <div class="flexbox-content" id="book-flexbox">
        <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/fantasy1.jpg" alt="The Songbird & The Heart Of Stone">
        </div>
        <div class="book-info">
        <h3>The Songbird & The Heart Of Stone</h3>
        <p>Carissa Broadband</p>
        <h5>$30.99</h5>
        </div>
    </div>
        <div class="add-to-cart">
            <button>ADD TO CART</button>
        </div>
    </div>

    <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/fantasy2.jpg" alt="Where The Library Hides">
        </div>
        <div class="book-info">
            <h3>Where The Library Hides</h3>
            <p>Isabel Ibanez</p>
            <h5>$30.00</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>

        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
            <img src="./images/fantasy3.jpg" alt="Servant Of Earth">
        </div>
        <div class="book-info">
            <h3>Servant Of Earth</h3>
            <p>Sarah Hawley</p>
            <h5>$27.39</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80"> 
            <div class="img">
            <img src="./images/fantasy4.jpg" alt="Variation">
        </div>
        <div class="book-info">
            <h3>Variation</h3>
            <p>Rebecca Yarros</p>
            <h5>$35.99</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
                <img src="./images/fantasy5.jpg" alt="Last Hour  Between Worlds">
            </div>
            <div class="book-info">
                <h3>Last Hour  Between Worlds</h3>
                <p>Melissa Carulo</p>
                <h5>$18.15</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>



<!-- Romance -->
<div class="flexbox">
    <h2 style="color: coral; font-size: 30px;">Romance</h2>
    <div class="flexbox-content" id="book-flexbox">
        <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/romance1.jpg" alt="Christmas With The Queen">
        </div>
        <div class="book-info">
        <h3>Christmas With The Queen</h3>
        <p>Hazel Gaynor</p>
        <h5>$24.95</h5>
        </div>
    </div>
        <div class="add-to-cart">
            <button >ADD TO CART</button>
        </div>
    </div>

    <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/romance2.jpg" alt="The Serpent & The Wolf">
        </div>
        <div class="book-info">
            <h3>The Serpent & The Wolf</h3>
            <p>Rebecca Robinson</p>
            <h5>$28.09</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>

        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
            <img src="./images/romance3.jpg" alt="The Sunflower I Louse">
        </div>
        <div class="book-info">
            <h3>The Sunflower I Louse</h3>
            <p>Adriana Allegri</p>
            <h5>$25.29</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80"> 
            <div class="img">
            <img src="./images/romance4.jpg" alt="The Lies We Leave Behind">
        </div>
        <div class="book-info">
            <h3>The Lies We Leave Behind</h3>
            <p>Noelle Salazar</p>
            <h5>$31.85</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
                <img src="./images/romance5.jpg" alt="Puck Prejudice">
            </div>
            <div class="book-info">
                <h3>Puck Prejudice</h3>
                <p>Lia Riley</p>
                <h5>$19.99</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>




<!-- Horror -->
<div class="flexbox">
    <h2 style="color: coral; font-size: 30px;">Horror</h2>
    <div class="flexbox-content" id="book-flexbox">
        <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/horror1.jpg" alt="The Whispering Night">
        </div>
        <div class="book-info">
        <h3>The Whispering Night</h3>
        <p>Susan Dennard</p>
        <h5>$21.99</h5>
        </div>
    </div>
        <div class="add-to-cart">
            <button>ADD TO CART</button>
        </div>
    </div>

    <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/horror2.jpg" alt="Dead Girls Don't Dream">
        </div>
        <div class="book-info">
            <h3>Dead Girls Don't Dream</h3>
            <p>Nino Cipri</p>
            <h5>$22.22</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>

        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
            <img src="./images/horror3.jpg" alt="The Skin You're In">
        </div>
        <div class="book-info">
            <h3>The Skin You're In</h3>
            <p>Ashley Robin Franklin</p>
            <h5>$20.25</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80"> 
            <div class="img">
            <img src="./images/horror4.jpg" alt="Revenant X">
        </div>
        <div class="book-info">
            <h3>Revenant X</h3>
            <p>David Wellington</p>
            <h5>$27.99</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
                <img src="./images/horror5.jpg" alt="She's Always Hungry">
            </div>
            <div class="book-info">
                <h3>She's Always Hungry</h3>
                <p>Eliza Clark</p>
                <h5>$23.95</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>





<!-- Adventure -->
<div class="flexbox">
    <h2 style="color: coral; font-size: 30px;">Adventure</h2>
    <div class="flexbox-content" id="book-flexbox">
        <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/adventure1.jpg" alt="Serpent Sea">
        </div>
        <div class="book-info">
        <h3>Serpent Sea</h3>
        <p>Maiya Ibrahim</p>
        <h5>$27.55</h5>
        </div>
    </div>
        <div class="add-to-cart">
            <button>ADD TO CART</button>
        </div>
    </div>

    <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/adventure2.jpg" alt="Mr. Nice Spy">
        </div>
        <div class="book-info">
            <h3>Mr. Nice Spy</h3>
            <p>Tiana Smith</p>
            <h5>$23.49</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>

        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
            <img src="./images/adventure3.jpg" alt="The Jewel Of The Isle">
        </div>
        <div class="book-info">
            <h3>The Jewel Of The Isle</h3>
            <p>Kerry Rea</p>
            <h5>$29.10</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80"> 
            <div class="img">
            <img src="./images/adventure4.jpg" alt="A Tale Told By Traitors">
        </div>
        <div class="book-info">
            <h3>A Tale Told By Traitors</h3>
            <p>R. Dugan</p>
            <h5>$30.99</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
                <img src="./images/adventure5.jpg" alt="A Wild And Ruined Song">
            </div>
            <div class="book-info">
                <h3>A Wild And Ruined Song</h3>
                <p>Ashley Shutterworth</p>
                <h5>$21.65</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>





<!--Science-Fiction Sci-fi -->
<div class="flexbox">
    <h2 style="color: coral; font-size: 30px;">Science-Fiction (Sci-fi)</h2>
    <div class="flexbox-content" id="book-flexbox">
        <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/sci-fi1.jpg" alt="The Inevitable Ruin">
        </div>
        <div class="book-info">
        <h3>The Inevitable Ruin</h3>
        <p>Mat Dinnimat</p>
        <h5>$23.45</h5>
        </div>
    </div>
        <div class="add-to-cart">
            <button>ADD TO CART</button>
        </div>
    </div>

    <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/sci-fi2.jpg" alt="Streetlight People">
        </div>
        <div class="book-info">
            <h3>Streetlight People</h3>
            <p>Charlene Thomas</p>
            <h5>$25.99</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>

        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
            <img src="./images/sci-fi3.jpg" alt="Collision Course">
        </div>
        <div class="book-info">
            <h3>Collision Course</h3>
            <p>Michelle Diener</p>
            <h5>$28.55</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80"> 
            <div class="img">
            <img src="./images/sci-fi4.jpg" alt="Breath Of Oblivion">
        </div>
        <div class="book-info">
            <h3>Breath Of Oblivion</h3>
            <p>Maurice Broaddus</p>
            <h5>$34.00</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
                <img src="./images/sci-fi5.jpg" alt="And The Mighty Will Fall">
            </div>
            <div class="book-info">
                <h3>And The Mighty Will Fall</h3>
                <p>K.B.Wagers</p>
                <h5>$22.75</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>





<!--Historical Fiction -->
<div class="flexbox">
    <h2 style="color: coral; font-size: 30px;">Historical Fiction</h2>
    <div class="flexbox-content" id="book-flexbox">
        <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/hf1.jpg" alt="Those Opulant Days">
        </div>
        <div class="book-info">
        <h3>Those Opulant Days</h3>
        <p>Jasquie Pham</p>
        <h5>30.64</h5>
        </div>
    </div>
        <div class="add-to-cart">
            <button>ADD TO CART</button>
        </div>
    </div>

    <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/hf2.jpg" alt="Eleanore Of Avignon">
        </div>
        <div class="book-info">
            <h3>Eleanore Of Avignon</h3>
            <p>Elizabeth DeLozier</p>
            <h5>$27.12</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>

        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
            <img src="./images/hf3.jpg" alt="Time Of The Child">
        </div>
        <div class="book-info">
            <h3>Time Of The Child</h3>
            <p>Niall Willians</p>
            <h5>$21.35</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80"> 
            <div class="img">
            <img src="./images/hf4.jpg" alt="The Undoing Of Violet Claybourne">
        </div>
        <div class="book-info">
            <h3>The Undoing Of Violet Claybournes</h3>
            <p>Emily Critchley</p>
            <h5>$23.85</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
                <img src="./images/hf5.jpg" alt="The Memory Dress">
            </div>
            <div class="book-info">
                <h3>The Memory Dress</h3>
                <p>Jade Beer</p>
                <h5>$24.55</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>





<!--Young Adult YA -->
<div class="flexbox">
    <h2 style="color: coral; font-size: 30px;">Young Adult (YA)</h2>
    <div class="flexbox-content" id="book-flexbox">
        <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/ya1.jpg" alt="Stranger Skies">
        </div>
        <div class="book-info">
        <h3>Stranger Skies</h3>
        <p>Pascale Lacelle</p>
        <h5>25.65</h5>
        </div>
    </div>
        <div class="add-to-cart">
            <button>ADD TO CART</button>
        </div>
    </div>

    <div class="flexbox-item">
        <div class="the80">
            <div class="img">
            <img src="./images/ya2.jpg" alt="When Mimi Went Missing">
        </div>
        <div class="book-info">
            <h3>When Mimi Went Missing</h3>
            <p>Suja Sukumar</p>
            <h5>$30.76</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>

        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
            <img src="./images/ya3.jpg" alt="Dead Below Deck">
        </div>
        <div class="book-info">
            <h3>Dead Below Deck</h3>
            <p>Jan Gangsei</p>
            <h5>$29.40</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80"> 
            <div class="img">
            <img src="./images/ya4.jpg" alt="In Want Of A Suspect">
        </div>
        <div class="book-info">
            <h3>In Want Of A Suspect</h3>
            <p>Tirzah Price</p>
            <h5>$27.50</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>


        <div class="flexbox-item">
            <div class="the80">
            <div class="img">
                <img src="./images/ya5.jpg" alt="Midnights With You">
            </div>
            <div class="book-info">
                <h3>Midnights With You</h3>
                <p>Clare Osongco</p>
                <h5>$26.79</h5>
            </div>
        </div>
            <div class="add-to-cart">
                <button type="submit">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>


</div>




<?php include 'Footer.php';
   ?>
<script src="home.js"></script>
</body>
</html>