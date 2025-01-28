<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Dashboard</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
<div class="margin" style="height: 60px; "></div>
<table style="margin-top:30px;" border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>SURNAME</th>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>PASSWORD</th> 
    </tr>

    <?php 
    include_once 'Database.php';
    include_once 'User.php';

    $database = new Database();
    $connection = $database->getConnection();

    $userRepository = new User($connection);

    
    $users = $userRepository->getAllUsers();

    
    foreach($users as $user){
        echo "
        <tr>
            <td>{$user['id']}</td>
            <td>{$user['name']}</td>
            <td>{$user['surname']}</td>
            <td>{$user['username']}</td>
            <td>{$user['email']}</td>
            <td>{$user['phone']}</td>
            <td>{$user['password']}</td>
            <td><a href='edit.php?id={$user['id']}'>Edit</a></td>
            <td><a href='delete.php?id={$user['id']}'>Delete</a></td>
        </tr>
        ";
    }
    ?>
</table>

</body>
</html>
