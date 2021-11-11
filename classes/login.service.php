<?php

class Login extends DB {


    protected function getUserPDO($email, $password) {
        $stmt = $this->connect()->prepare('SELECT * FROM member WHERE email = ?;');
        
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../login.php?error=emailnotfound");
            exit();
        }

        $hashedPassword = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $checkPassword = password_verify($password, $hashedPassword[0]["password"]);
        // $checkPassword = $hashedPassword[0]["password"] == $password;

        if(!password_verify($password, $hashedPassword[0]["password"])) {
            $stmt = null;
            header("location: ../login.php?error=wrongpassword". $hashedPassword[0]["password"]);
            exit();
        } elseif (password_verify($password, $hashedPassword[0]["password"])) {
            $stmt = $this->connect()->prepare('SELECT * FROM member WHERE email = ?;');

            if(!$stmt->execute(array($email))) {
                $stmt = null;
                header("location: ../login.php?error=stmtfailed");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['userEmail'] = $user[0]["email"];
            $_SESSION['userFname'] = $user[0]["fname"];
            header("location: ../index.php?error=none". $hashedPassword[0]["password"]);
            $stmt = null;
        }
        $stmt = null;
    }



    protected function getUserWithSqli($email, $password) {
        $stmt = $this->connectWithSqli()->prepare('SELECT email FROM member WHERE email = ?;');
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
        $hashedPassword = mysqli_fetch_assoc($resultData);
        $checkPassword = password_verify($password, $hashedPassword[0]["password"]);

        if ($checkPassword == false) {
            mysqli_stmt_close($stmt);
            header("location: ../login.php?error=wrongpassword");
        }
        $user = mysqli_fetch_assoc($resultData);

        session_start();
            $_SESSION['userEmail'] = $user[0]["email"];
            $_SESSION['userFname'] = $user[0]["fname"];
            header("location: ../index.php?error=none");
            mysqli_stmt_close($stmt);
    }

}