<?php

// Get the user ID from the URL
$bookId = $_GET['id']; 

// Include necessary files
include_once 'Database.php';
include_once 'Book.php';

// Initialize the Database and get the connection
$database = new Database();
$connection = $database->getConnection();

// Pass the connection to the User class
$bookRepository = new Book($connection);

// Call deleteUser to delete the user
$bookRepository->deleteBook($bookId);

// Redirect to Dashboard.php after deletion
header("Location: Dashboard.php");
exit;
?>