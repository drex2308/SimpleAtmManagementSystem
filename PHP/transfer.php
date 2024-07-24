<?php
$error4='';
include("transeval.php");
 ?>

 <!doctype html>
 <html>
 <head>
   <title>Transfer</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="stylem.css">
</head>
<body>

  <div class="login1-box">
    <form action="" method="post">
    <p>Account Number </p>
    <input type="text" placeholder="dest. Account" id="acc" name="acc">
    <p>Amount</p>
    <input type="number" min="100" placeholder="in rupees" id="amount" name="amount"><br/><br/>
    <input type="submit" value="Enter" name="submit">
    </form>
        <span><?php echo $error4; ?></span>
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
