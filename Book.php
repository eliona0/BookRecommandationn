<?php
class Book {
    private $conn;
    private $table_name = 'books';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addBook($image, $title,$author, $price, $genre) {
        $query = "INSERT INTO {$this->table_name} (image, title,author, price, genre) VALUES (:image, :title, :author,:price, :genre)";

        $stmt = $this->conn->prepare($query);


        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':genre', $genre);



        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function getAllBooks() {
        $sql = "SELECT * FROM {$this->table_name}";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC); 
    }

    
    function getBookById($id) {
        $conn = $this->conn; 
    
        $sql = "SELECT * FROM books WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $book = $stmt->fetch();
    
        return $book;
    }
    

    
    public function updateBook($id, $image, $title, $author, $price, $genre) {
            $query = "UPDATE {$this->table_name} 
                      SET image = :image, title = :title, author = :author, price = :price , genre = :genre
                      WHERE id = :id";

        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':genre', $genre);
    
        return $stmt->execute();
    }
    

    
    public function deleteBook($id) {
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