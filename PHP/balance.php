<?php
session_start();
 ?>
<!doctype html>
<html>
<head>
  <title>Main</title>
    <link rel="stylesheet" type="text/css" href="stylem.css">
    <meta charser="UTF-8">
</head>
<body>
  <div class="w3-container" id="namedis">
    <?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "proj";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$jus1 = $_SESSION["number"];
$sql = "SELECT name FROM customer cs,card c WHERE card_no  = '$jus1' and cs.cust_id = c.cust_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Hello,      " . $row["name"]. "<br>";
    }
    $sqlo = "SELECT * from customer c join account a where c.cust_id = a.cust_id and a.acc_no in (select c.acc_no from card c where c.card_no = '$jus1')";
    $res3 = mysqli_query($conn, $sqlo);
    if (mysqli_num_rows($res3) > 0) {
        // output data of each row
        while($row5 = mysqli_fetch_assoc($res3)) {
          $_SESSION["accno"] = $row5["acc_no"];
          $_SESSION["custid"] = $row5["cust_id"];
        }
      }
}
 else {
    echo "0 results";
    header("Location: main.php");
    exit();
}
?>
</div>
<style>
button {
  color: #fff !important;
text-transform: capitalize;
text-decoration: none;
background: #ed3330;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
font-family: 'myFancyFont3',times,serif ;
  }


.button:hover {
  background: #434343;
  letter-spacing: 1px;
  -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
  transition: all 0.4s ease 0s;
}

</style>

<br>

    <div class="m1" id="m1">

        <button class="button" onclick="location.href='withdraw.php'"> Withdraw </button>

      </div>
      <div class="m2" id="m2">

          <button class="button" onclick="location.href='deposit.php'"> Deposit </button>

        </div>

        <div class="m3" id="m3">

            <button class="button" onclick="location.href='transfer.php'"> Transfer </button>

          </div>
          <div class="m4" id="m4">

              <button class="button" onclick="location.href='statement.php'"> Mini-Statement </button>

            </div>
            <div class="m6" id="m6">

                <button class="button" onclick="location.href='pinc.php'"> Change Pin </button>

              </div>
              <div class="m5" id="m5">

                  <button class="button" onclick="location.href='balance.php'"> Check Balance </button>

                </div>

        <div class="saying">

          <p> A Smarter way of banking...!</p>
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

       <div class="bal" id="bal">
         <?php
         $id=$_SESSION["accno"];
         $sql = "SELECT balance FROM account a where a.acc_no = '$id'";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
             // output data of each row
             while($row = mysqli_fetch_assoc($result)) {
                 echo "Balance:   Rs ".$row["balance"] ;
             }
           }
          ?>
</div>



</body>
</html>
