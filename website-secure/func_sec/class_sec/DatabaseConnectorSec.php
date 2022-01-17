<?php

class DatabaseConnectorSec
{
    protected $conn;

    public function __construct() {
        try {
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
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
        $stmt = $this->conn->prepare("SELECT * FROM books");

        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addBook($title, $cover, $text) {
        $stmt = $this->conn->prepare("INSERT INTO books (book_title, book_cover, book_text) VALUES (?, ?, ?)");

        $stmt->bind_param("sss", $title, $cover, $text);

        return $stmt->execute();
    }

    public function deleteBook($bookID) {
        $stmt = $this->conn->prepare("DELETE FROM books WHERE book_id = ?");

        $stmt->bind_param("i", $bookID);

        return $stmt->execute();
    }

    public function loginUser($username, $password) {
        $password = MD5($password);
        $stmt = $this->conn->prepare("SELECT username, password FROM user WHERE username = ? AND password = ?");

        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $check = $stmt->get_result();

        return $check->fetch_assoc() > 0;;
    }
}