<?php
$error1='';
include("witheval.php");
 ?>

 <!doctype html>
 <html>
 <head>
   <title>Withdraw</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="stylem.css">
</head>
<body>

  <div class="login-box">
        <form action="" method="post">
        <p>Enter Amount </p><br>
        <input type="number" min="500" max="40000" placeholder="in rupees" id="amount" name="amount"><br/><br/>
        <input type="submit" value="proceed" name="submit">
        </form>
        <span><?php echo $error1; ?></span>
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
