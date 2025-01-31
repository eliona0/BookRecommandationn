<?php
include_once 'Database.php';
include_once 'User.php';

$database = new Database();
$connection = $database->getConnection();


$userRepository = new User($connection);


if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid user ID."); 
}

$userId = $_GET['id'];
$user = $userRepository->getUserById($userId);

if (!$user) {
    die("User not found."); 
}


if (isset($_POST['editBtn'])) {
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    
    if (empty($name) || empty($surname) || empty($email) || empty($username)) {
        echo "<p style='color: red;'>All fields except password are required.</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: red;'>Invalid email format.</p>";
    } else {

        $success = $userRepository->updateUser(
            $id,
            $name,
            $surname,
            $email,
            $username,
            !empty($password) ? $password : null
        );

        if ($success) {
            header("Location: Dashboard.php");
            exit;
        } else {
            echo "<p style='color: red;'>Failed to update user.</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        <label>ID</label>
        <input type="text" name="id" value="<?= htmlspecialchars($user['id']) ?>" readonly> <br><br>
        
        <label>Name</label>
        <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>"> <br><br>
        
        <label>Surname</label>
        <input type="text" name="surname" value="<?= htmlspecialchars($user['surname']) ?>"> <br><br>
        
        <label>Email</label>
        <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>"> <br><br>
        
        <label>Username</label>
        <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>"> <br><br>
        
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter new password (leave blank to keep current)"> <br><br>

        <input type="submit" name="editBtn" value="Save Changes"> <br><br>
    </form>
</body>
</html>
