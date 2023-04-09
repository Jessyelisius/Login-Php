<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Home</title>
</head>
<body>
    <div class="container">
        <header>Feel Free</header>
        <h1>Welcome Home <?php "user_uid"?></h1>
    <ul>
        <?php
        if(isset($_SESSION["userid"])){
        ?>
        <li><a href="./home.php"><?php echo $_SESSION["userid"];?></a></li>
        <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
        <?php
        }
        else{
        ?>
        <li><a href="#">SIGNIN</a></li>
        <li><a href="#" class="header-login-a">LOGININ</a></li>
        <?php
        }
        ?>
    </ul>
    </div>
</body>
</html>