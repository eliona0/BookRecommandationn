<?php
session_start();
include_once 'Database.php';
include_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($user->login($username, $password)) {
        header("Location: Home.php"); 
        exit;
    } else {
        echo "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookaxy</title>
    <link rel="stylesheet" href="LoginSignup.css">
</head>
<body>
    <div id="login-box">
        <div class="login-container">
            <form class="form" method="POST" action="Login.php" id="form">
                <label>Log In</label>
                <img class="LoginIcon" src="./images/loginiconn.png" alt="Log In Icon">
            <div class="username-password">
                <input type="username" name="username" class="form-input" id="username" placeholder="Username">
            </div>
            <div class="username-password">
                <input type="password" name="password" class="form-input" id="password" placeholder="Password">
            </div>  
                <p>Dont Have An Account?</p>
                <button type="submit" ><a href="Signup.php">Sign Up</a></button>
                <button type="submit" id="login-btn">Log in</button>
            </form>
        </div>
    </div>

    <script src="login.js">
    </script>
</body>
</html>
