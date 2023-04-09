<?php

if (isset($_POST["submit"])) {
    
    //grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    //instatiate signupContr class;
    include_once (__DIR__ . "../../classes/dbh.classes.php");
    include_once (__DIR__ . "../../classes/signup.classes.php");
    include_once (__DIR__ . "../../classes/signupContrl.classes.php");

    $signup = new signupContr($uid,$pwd,$pwdRepeat,$email);

    //running error handler and user signup
    $signup->signupUser();
    //GOing back to front page
    header('location:  ../index.php?error=none');
}