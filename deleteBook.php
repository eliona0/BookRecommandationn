<?php

$bookId = $_GET['id']; 

include_once 'Database.php';
include_once 'Book.php';

$database = new Database();
$connection = $database->getConnection();

$bookRepository = new Book($connection);

$bookRepository->deleteBook($bookId);

header("Location: Dashboard.php");
exit;
?>