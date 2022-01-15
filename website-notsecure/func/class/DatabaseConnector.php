<?php

class DatabaseConnector
{
    protected $conn;

    public function __construct() {
        try {
            $this->conn = new mysqli("localhost", "infosec", "infosec", "infosec_exercise_injection");

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
}