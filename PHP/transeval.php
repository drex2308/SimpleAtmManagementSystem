
<?php
session_start();
if(isset($_POST['submit'])){
 if(empty($_POST['amount'])){
 $error4 = "Enter Valid amount";
 }
 else
 {
   $acc = $_POST['acc'];
   $amt = $_POST['amount'];
   $conn="proj";
   //Establishing Connection with server by passing server_name, user_id and pass as a patameter
   $conn = mysqli_connect("localhost", "root", "","proj");
   //Selecting Database
   $db = mysqli_select_db($conn, "proj");
   $jus2 = $_SESSION["number"];
   $accs = $_SESSION["accno"];
   if($acc!=$accs)
   {
   $sqlg = "SELECT * from account a where a.acc_no = '$acc'";
   $query= mysqli_query($conn, $sqlg);
   $rows = mysqli_num_rows($query);
   if($rows == 1)
   {
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
             $sqlv ="UPDATE account a set balance = balance +'$amt' where a.acc_no = '$acc'";
             mysqli_query($conn, $sqlv);
             $error4 = "Transaction Sucessfull :) ";
             $numt=rand(1111111,9999999);
             $sqlt1 ="INSERT INTO Transaction (tra_id,tra_type,tra_status,cust_id,acc_no) values ($numt,'transfer $amt to $acc' ,'success','{$_SESSION["custid"]}','$accs')";
             mysqli_query($conn, $sqlt1);
             $num2=rand(1111111,9999999);
             $sqlt2 ="INSERT INTO Transaction (tra_id,tra_type,tra_status,cust_id,acc_no) values ($num2,'received $amt from {$_SESSION["accno"]}' ,'success','{$_SESSION["custid"]}','$acc')";
             mysqli_query($conn, $sqlt2);

           }

           else {
             $error4 = "Insufficient funds";
           }
         }
       }
       else
       {
         $error4 = "Connection error :(";
       }
   }
   else {

     $error4 = "Account not found :(";
   }
}

else {
  $error4 = "Enter Valid Account Number";
}
   }
}

   ?>
