<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="wrapper">
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="get">
      <div class="input-box">
        <input type="text" name="uid" placeholder="Username" required>
      </div>
      <div class="input-box">
        <input type="password" name="pwd" placeholder="Password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" name="submit" value="Login">
      </div>
      <div class="text">
        <h3>Dont have an account? <a href="./index.php">Signup</a></h3>
      </div>
    </form>
  </div>

</body>
</html>