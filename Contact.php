<?php
class Contact {
    private $conn;
    private $table_name = 'contact';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addContact($name, $email, $phone, $subject, $message, $username) {
        $query = "INSERT INTO {$this->table_name} (name, email, phone, subject, message, username) 
                  VALUES (:name, :email, :phone, :subject, :message, :username)";
        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':username', $username);
    
        if ($stmt->execute()) {
            return true;
        } else {
            print_r($stmt->errorInfo()); // Print SQL errors
            return false;
        }
    }
    
    
    


    public function getAllContact() {
        $sql = "SELECT * FROM {$this->table_name}";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC); 
    }

    
    function getContactById($id) {
        $conn = $this->conn; 
    
        $sql = "SELECT * FROM contact WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $contact = $stmt->fetch();
    
        return $contact;
    }
    

    
    public function deleteContact($id) {
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