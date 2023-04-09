<?php

if (isset($_POST["submit"])) {
    
    //grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    //instatiate signupContr class;
    include_once (__DIR__ . "../../classes/dbh.classes.php");
    include_once (__DIR__ . "../../classes/login.classes.php");
    include_once (__DIR__ . "../../classes/loginContr.classes.php");

    $login = new loginContr($uid,$pwd);

    //running error handler and user signup
    $login -> loginUser();
    //GOing back to front page
    header('location: ../home.php');
    
}