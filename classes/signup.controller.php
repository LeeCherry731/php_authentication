<?php

class SignupController extends Signup {
    private $email;
    private $password;
    private $confirmPassword;
    private $fname;
    private $lname;
    private $phone;

    public function __construct($email, $password, $confirmPassword, $fname, $lname, $phone) {
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->phone = $phone;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if($this->isEmail() == false) {
            header("location: ../signup.php?error=invalidemail");
            exit();          
        }
        if($this->isPasswordMatch() == false) {
            header("location: ../signup.php?error=passwordnotmatch");
            exit();          
        }
        if($this->isEmailTaken() == false) {
            header("location: ../signup.php?error=emailistaken");
            exit();          
        }

        $this->createUser($this->email, $this->password, $this->fname, $this->lname, $this->phone);
    }

    private function emptyInput() {
        $result = false;
        if(empty($this->email) || empty($this->password) || empty($this->confirmPassword) || empty($this->fname) || empty($this->lname) || empty($this->phone)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function isEmail() {
        $result = null;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function isPasswordMatch() {
        $result = null;
        if($this->password !== $this->confirmPassword) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    
    private function isEmailTaken() {
        $result = $this->checkEmailExit($this->email);
        // if(!$this->checkEmailExit($this->email)) {
        //     $result = false;
        // } else {
        //     $result = true;
        // }
        return $result;
    }
    
}