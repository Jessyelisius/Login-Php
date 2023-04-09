<?php
 require_once(__DIR__ .'/signup.classes.php');

class signupContr extends Signup{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;


   public function __construct($uid,$pwd,$pwdRepeat,$email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

     //signingup user 
    public function signupUser(){
       if ($this->emptyInput() == false) {
            //echo "Invalid input";
            header('location: ../index.php?error=emptyinput');
            exit();
       }

       if ($this->invalidUid() == false) {
            //echo "invalid Username";
            header('location: ../index.php?error=username');
            exit();
        }
       
        if ($this->invalidEmail() == false) {
            //echo "invalid Email";
            header('location: ../index.php?error=email');
            exit();
        }

        if ($this->pwdMatch() == false) {
            //echo "Password don't match";
            header('location: ../index.php?error=passwordmatch');
            exit();
        }

        if ($this->uidTakenCheck() == false) {
            //echo "username or email taken";
            header('location: ../index.php?error=useroremailtaken');
            exit();
        }
        $this->setUsers($this->uid, $this->pwd, $this->email);
    }



    //checking for an empty input
    private function emptyInput(){
        $result = false;
        if (empty($this->uid) || empty($this->pwd)  || empty($this->pwdRepeat) || empty($this->email)) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    //checking if username is valid 

    private function invalidUid(){
        $result = false;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

// checking if email is valid email address

    private function invalidEmail(){
        $result = false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

//Checking if password match with repeat password

    private function pwdMatch(){
        $result = false;
        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    //Checking if user exits
    private function uidTakenCheck(){
        $result = false;
        if (!$this->checkUsers($this->uid, $this->email)) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }



}

