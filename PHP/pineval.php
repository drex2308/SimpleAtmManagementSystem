<?php
session_start();
if(isset($_POST['submit'])){
 if(empty($_POST['pin'])){
 $error3 = "Enter Valid Pin";
 }
 else
 {
   $new = $_POST['pin'];
   $conn="proj";
   //Establishing Connection with server by passing server_name, user_id and pass as a patameter
   $conn = mysqli_connect("localhost", "root", "","proj");
   //Selecting Database
   $db = mysqli_select_db($conn, "proj");
   $jus2 = $_SESSION["number"];
             $sqlu ="UPDATE card c set c.pin = '$new' where c.card_no = '$jus2'";
             if(mysqli_query($conn, $sqlu))
             {
             $error3 = "Pin Changed Sucessfully :)";
             }
           else {
             $error3 = "Error, Try again";
           }
         }
       }
   ?>
