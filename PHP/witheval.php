
<?php
session_start();
if(isset($_POST['submit'])){
 if(empty($_POST['amount'])){
 $error1 = "Enter Valid amount";
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
   $sqls = "SELECT balance FROM account a, card c where c.acc_no = a.acc_no and a.acc_no in (select c.acc_no from card c where c.card_no = '$jus2')";
   $res = mysqli_query($conn ,$sqls);
   if (mysqli_num_rows($res) > 0) {
       // output data of each row
       while($row = mysqli_fetch_assoc($res))
       {
           if($amt <= $row["balance"] && $row["balance"]>0)
           {
             $sqlu ="UPDATE account  set balance = balance -'$amt' where acc_no in (select c.acc_no from card c where c.card_no = '$jus2')";
             mysqli_query($conn, $sqlu);
             $error1 = "Transaction Sucessfull :) ";
             $numt=rand(1111111,9999999);
             $sqlt ="INSERT INTO Transaction (tra_id,tra_type,tra_status,cust_id,acc_no) values ($numt,'debit $amt' ,'success','{$_SESSION["custid"]}','{$_SESSION["accno"]}')";
             mysqli_query($conn, $sqlt);
           }
           else {
             $error1 = "Insufficient funds";
           }
         }
       }
       else
       {
         $error1 = "Connection error :(";
       }
   }

   }


   ?>
