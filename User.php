<?php
class User {
    private $conn;
    private $table_name = 'user';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($name, $surname,$username, $email, $phone, $password) {
        $query = "INSERT INTO {$this->table_name} (name, surname,username, email,phone, password) VALUES (:name, :surname, :username,:email,:phone, :password)";

        $stmt = $this->conn->prepare($query);

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT));


        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function login($username, $password) {
        $query = "SELECT id, name, surname, username,email,phone, password FROM {$this->table_name} WHERE username = :username";


        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        // Check if a record exists
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                // Password is correct
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                return true;
            } else {
                // Debugging: Print password verification failure
                echo "Password does not match.";
            }
        }
        return false;
    }
}
?>