<?php
$error3=' ';
include("pineval.php");
 ?>

 <!doctype html>
 <html>
 <head>
   <title>Pin Change</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="stylem.css">
</head>
<body>

  <div class="login-box">
        <form action="" method="post">
        <p>Enter New Pin</p><br>
        <input type="number" min="1111" max="9999" placeholder="4-digit" id="pin" name="pin"><br/><br/>
        <input type="submit" value="proceed" name="submit">
        </form>
        <span><?php echo $error3; ?></span>
        <span></span>
      </div>

      <div class="ba1" id="ba1">
        <button id="b3" onclick="location.href='main.php'"> Back </button>
        <style>
          #b3{
            font-family: 'myFancyFont3',times,serif ;
            padding: 15px 15px;
            font-size: 12px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color:white;
            background-color: #ff0038;
            border: none;
            border-radius: 15px;
            font-color:black;
        }
      </style>
      </div>

      <div class="l1" id="l1">

        <button id="b2" onclick="location.href='logout.php'"> Logout </button>
        <style>
          #b2{
            font-family: 'myFancyFont3',times,serif ;
            padding: 15px 15px;
            font-size: 12px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color:white;
            background-color: #ff0038;
            border: none;
            border-radius: 15px;
            font-color:black;
        }
      </style>
      </div>
</body>
</html>
