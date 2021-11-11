<?php

class Signup extends DB {


    protected function createUser($email, $password, $fname, $lname, $phone) {
        $stmt = $this->connect()->prepare('INSERT INTO member (email, password, fname, lname, phone) VALUES (?,?,?,?,?);');
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        if(!$stmt->execute(array($email, $hashedPassword, $fname, $lname, $phone))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkEmailExit($email) {
        $stmt = $this->connect()->prepare('SELECT email FROM member WHERE email = ?;');
        
        if(!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();
        }

        $resultCheck = null;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;    
        }
        return $resultCheck;
    }
}