<?php
include("loginserv.php");?>
<!doctype html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
    <div class="login-box">
    <img src="iavatar.jpg" class="avatar">
        <h1>   </h1>
            <form action="" method="post">
            <p>CARD NO</p>
            <input type="text" placeholder="CARD NO" id="user" name="card_no">
            <p>PIN</p>
            <input type="password" placeholder="PIN" id="pass" name="pin"><br/><br/>
            <input type="submit" value="Login" name="submit">
            </form>
            <!-- Error Message -->
            <span><?php echo $error; ?></span>
            <span></span>

        </div>

    </body>
</html>
