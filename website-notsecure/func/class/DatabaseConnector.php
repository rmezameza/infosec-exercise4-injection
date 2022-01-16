<?php

class DatabaseConnector
{
    protected $conn;

    public function __construct() {
        try {
            $this->conn = new mysqli("localhost", "infosec", "infosec", "infosec_exercise_injection");
            $this->conn->set_charset('utf8mb4');
            if($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
        catch(Exception $e) {
            die("Connection failed: " . $e);
        }
    }

    public function __destruct() {
        $this->conn->close();
    }


    public function getBooks() {
        $sql = "SELECT * FROM books";
        return $this->conn->query($sql);
    }

    public function addBook($title, $cover, $text) {
        $sql = "INSERT INTO books (book_title, book_cover, book_text) VALUES ('{$title}', '{$cover}', '{$text}')";
        return $this->conn->query($sql);
    }

    public function deleteBook($bookID) {
        $sql = "DELETE FROM books WHERE book_id = {$bookID}";
        return $this->conn->query($sql);
    }

    public function loginUser($username, $password) {
        $sql = "SELECT * FROM user WHERE username = {$username} AND password = MD5({$username})";
        return $this->conn->query($sql);
    }
}