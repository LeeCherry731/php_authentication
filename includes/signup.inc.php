<?php

// if(isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];


    echo $email = $_POST["email"];
    echo $password = $_POST["password"];
    echo $confirmPassword = $_POST["confirmPassword"];
    echo $fname = $_POST["fname"];
    echo $lname = $_POST["lname"];
    echo $phone = $_POST["phone"];

    include "../classes/db.php";
    include "../classes/signup.service.php";
    include "../classes/signup.controller.php";

    try {
        $signup = new SignupController($email, $password, $confirmPassword, $fname, $lname, $phone);
        $signup->signupUser();
        // $isSignupSuccess = $signup->signupUser();
        // if ($isLoginSuccess) {
            header("location: ../login.php?error=none");
        // } 
        // header("location: ../login.php?error=signupfailed");
    } catch(PDOException $e) {
            echo "Error!: ". $e->getMessage() . "<br/>";
            
    }
    

    
// }


// echo $email = $_POST["email"];
// echo $password = $_POST["password"];
// echo $confirmPassword = $_POST["confirmPassword"];
// echo $fname = $_POST["fname"];
// echo $lname = $_POST["lname"];
// echo $phone = $_POST["phone"];

// try {
//     $username = "root";
//     $password = "123456789";
//     $db = new PDO("mysql:host=localhost;dbname=etech", $username, $password);
//     return $db;
// } catch(PDOException $e) {
//     echo "Error!: ". $e->getMessage() . "<br/>";
//     die();
// }