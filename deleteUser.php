<?php

$userId = $_GET['id']; 

include_once 'Database.php';
include_once 'User.php';

$database = new Database();
$connection = $database->getConnection();

$userRepository = new User($connection);

$userRepository->deleteUser($userId);

header("Location: Dashboard.php");
exit;
?>
