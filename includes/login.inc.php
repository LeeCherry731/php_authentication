<?php

// if(isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    // echo $email = $_POST["email"];
    // echo $password = $_POST["password"];
    // echo $confirmPassword = $_POST["confirmPassword"];
    // echo $fname = $_POST["fname"];
    // echo $lname = $_POST["lname"];
    // echo $phone = $_POST["phone"];

    include "../classes/db.php";
    include "../classes/login.service.php";
    include "../classes/login.controller.php";

    try {
        $login = new LoginController($email, $password);
        $login->loginUser();

    } catch(PDOException $e) {
            echo "Error!: ". $e->getMessage() . "<br/>";
            
    }
    