<?php
// require "./classes/dbh.classes.php";
// include "./classes/signup.classes.php";
// include "./classes/signup-contrl.classes.php";

?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS </title>
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="includes/signup.inc.php" method="post">
      <div class="input-box">
        <input type="text" name="uid" placeholder="Username" required>
      </div>
      <div class="input-box">
        <input type="password" name="pwd" placeholder="Password" required>
      </div>
      <div class="input-box">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="E-mail" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" name="submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="./login.php">Login now</a></h3>
      </div>
    </form>
  </div>



</body>
</html>
