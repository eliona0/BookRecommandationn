<?php

$contactId = $_GET['id']; 

include_once 'Database.php';
include_once 'Contact.php'; 

$database = new Database();
$connection = $database->getConnection();

$contactRepository = new Contact($connection);

$contactRepository->deleteContact($contactId);

header("Location: Dashboard.php");
exit;
?>
