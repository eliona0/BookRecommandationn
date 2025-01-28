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


        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                return true;
            } else {
                echo "Password does not match.";
            }
        }
        return false;
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM {$this->table_name}";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC); 
    }

    
    function getUserById($id) {
        $conn = $this->conn; 
    
        $sql = "SELECT * FROM user WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch();
    
        return $user;
    }
    

    
    public function updateUser($id, $name, $surname, $email, $username, $password = null) {
        if ($password) {
            $query = "UPDATE {$this->table_name} 
                      SET name = :name, surname = :surname, email = :email, username = :username, password = :password 
                      WHERE id = :id";
        } else {
            $query = "UPDATE {$this->table_name} 
                      SET name = :name, surname = :surname, email = :email, username = :username 
                      WHERE id = :id";
        }
    
        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
    
        if ($password) {
            $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT));
        }
    
        return $stmt->execute();
    }
    

    
    public function deleteUser($id) {
        if (empty($id)) {
            return false;
        }
    
        $query = "DELETE FROM {$this->table_name} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
        if ($stmt->execute()) {
            return true;
        } else {
            print_r($stmt->errorInfo());
            return false;
        }
    }
    
}
?>