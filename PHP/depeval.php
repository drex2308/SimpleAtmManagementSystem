
<?php
session_start();
if(isset($_POST['submit'])){
 if(empty($_POST['amount'])){
 $error2 = "Enter Valid amount";
 }
 else
 {
   $amt = $_POST['amount'];
   $conn="proj";
   //Establishing Connection with server by passing server_name, user_id and pass as a patameter
   $conn = mysqli_connect("localhost", "root", "","proj");
   //Selecting Database
   $db = mysqli_select_db($conn, "proj");
   $jus2 = $_SESSION["number"];
             $sqlu ="UPDATE account  set balance = balance +'$amt' where acc_no in (select c.acc_no from card c where c.card_no = '$jus2')";
             if(mysqli_query($conn, $sqlu))
             {
             $error2 = "Transaction Sucessfull :) ";
             $numt=rand(1111111,9999999);
             $sqlt ="INSERT INTO Transaction (tra_id,tra_type,tra_status,cust_id,acc_no) values ($numt,'credit $amt' ,'success','{$_SESSION["custid"]}','{$_SESSION["accno"]}')";
             mysqli_query($conn, $sqlt);
           }
           else {
             $error2 = "Error, Try again";
           }
         }
       }
   ?>
