<?php
session_start();
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['card_no']) || empty($_POST['pin'])){
 $error = "CARD NO  or PIN is Invalid";
 }
 else
 {
 //Define $user and $pass
 $card_no=$_POST['card_no'];
 $pin=$_POST['pin'];
 $conn="proj";
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "","proj");
 //Selecting Database
 $db = mysqli_select_db($conn, "proj");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM card WHERE pin='$pin' AND card_no='$card_no'");

 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: main.php");
 $_SESSION["number"] = $card_no;
  exit(); // Redirecting to other page
 }
 else
 {
 $error = "CARD NO or PIN is INVALID";
 }
 mysqli_close($conn); // Closing connection
 }
}

?>
