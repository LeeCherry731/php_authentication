<?php

class LoginController extends Login {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function loginUser() {
        if($this->emptyInput() == false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        }

        // $this->getUserWithSqli($this->email, $this->password);
        $this->getUserPDO($this->email, $this->password);
    }

    private function emptyInput() {
        $result = false;
        if(empty($this->email) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    
}