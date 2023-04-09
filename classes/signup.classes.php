<?php
require_once( __DIR__ . '/dbh.classes.php');
// include/mysqld_error.h

class Signup extends Dbh {

    protected function setUsers($uid, $pwd, $email){
        $stmt = $this->connect()->prepare("INSERT INTO ooplogin.usery(users_uid, users_pwd, users_email) VALUES ( ?, ?, ?);");

        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $hashedpwd, $email))) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }
        $stmt = null;
    }   

    
    // protected function setUsers($uid, $pwd, $email){
    //     $sql = 'INSERT INTO ooplogin.usery(users_uid, users_pwd, users_email) VALUES ( ?, ?, ?)';
    //     $stmt = $this->connect()->prepare($sql);
    //     $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

    //     if (!$stmt->execute(array($uid, $hashedpwd, $email))) {
    //         $stmt = null;
    //         header('location: ../index.php?error=stmtfailed');
    //         exit();
    //     }
    //     $stmt = null;
    // }  
    


    protected function checkUsers($uid,$email){
        $stmt = $this->connect()->prepare("SELECT users_uid FROM ooplogin.usery WHERE users_uid = ? OR users_email = ?;");

        if (!$stmt->execute(array($uid,$email))) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        $resultChecked = false;
        if ($stmt->rowCount() > 0) {
           $resultChecked = false;
        }
        else{
            $resultChecked = true;
        }
        return $resultChecked;
   }

}

