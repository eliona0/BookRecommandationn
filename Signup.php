<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookaxy</title>
    <link rel="stylesheet" href="LoginSignup.css">
</head>
<body>
    <div id="signup-box">
        <div class="signin-container">
            <form class="form" action="Signup.php" method="POST" id="form">
                <label class="label1">Sign Up</label>
                <div class="klientsdata">
                    <input type="text" name="name" class="form-input" id="name" placeholder="Name" required>
                </div>
                <div class="klientsdata">
                    <input type="text" name="surname" class="form-input" id="surname" placeholder="Surname" required>
                </div>
                <div class="klientsdata">
                    <input type="text" name="username" class="form-input" id="username" placeholder="Username" required>
                </div>
                <div class="klientsdata">
                    <input type="email" name="email" class="form-input" id="email" placeholder="Email" required>
                </div>
                <div class="klientsdata">
                    <input type="text" name="phone" class="form-input" id="phone" placeholder="Phone number" required>
                </div>
                <div class="klientsdata">
                    <input type="password" name="password" class="form-input" id="password" placeholder="Password" required>
                </div>
                <label class="label2">
                    <input type="checkbox" style="width: 20px;" id="checkbox">I have read and agree to the Terms of Service and Privacy Policy.
                </label>
                <button type="submit" id="signin-btn">Sign Up</button>
            </form>
        </div>
    </div>
    <script src="signup.js"></script>
</body>
</html>


<?php 
include_once 'Database.php';
include_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    // $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password
    $password = $_POST['password'];

    // Register the user
    if ($user->register($name, $surname, $username, $email, $phone, $password)) {
        header("Location: Login.php"); // Redirect to login page
        exit;
    } else {
        echo "Error registering user!";
    }
}
?>
