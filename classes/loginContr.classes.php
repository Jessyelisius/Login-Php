<?php
 require_once(__DIR__ .'/login.classes.php');

class loginContr extends Login{

    private $uid;
    private $pwd;


   public function __construct($uid,$pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

     //logining user 
    public function loginUser(){
       if ($this->emptyInput() == false) {
            //echo "Invalid input";
            header('location: ../index.php?error=emptyinput');
            exit();
       }

       $this->getUsers($this->uid, $this->pwd); 
    }

    //checking for an empty input
    private function emptyInput(){
        $result = false;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

}

