<?php

// Get the user ID from the URL
$userId = $_GET['id']; 

// Include necessary files
include_once 'Database.php';
include_once 'User.php';

// Initialize the Database and get the connection
$database = new Database();
$connection = $database->getConnection();

// Pass the connection to the User class
$userRepository = new User($connection);

// Call deleteUser to delete the user
$userRepository->deleteUser($userId);

// Redirect to Dashboard.php after deletion
header("Location: Dashboard.php");
exit;
?>
