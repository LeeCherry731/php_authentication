<?php

class DB {
    protected function connect() {
        try {
            $username = "root";
            $password = "";
            $conn = new PDO("mysql:host=localhost;dbname=etech", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Error!: ". $e->getMessage() . "<br/>";
            die();
        }
    }
    protected function connectWithSqli() {
        
            $username = "root";
            $password = "";
            $conn = mysqli_connect("localhost", $username, $password);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";
            return $conn;

    }
}