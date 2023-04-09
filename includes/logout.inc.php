<?php

session_start();
session_unset();
session_destroy();

 //GOing back to front page
 header('location: ../home.php');