<?php
session_start();
 ?>
 <!doctype html>
 <html>
 <head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="stylem.css">
   <title>Mini Statement</title>
 </head>
 <body>

           <div style="overflow-x:auto;">
           <table>
           					<?php

           				$servername = "localhost";
           				$username = "root";
           				$password = "";
           				$dbname = "proj";

           				// Create connection
           				$conn = new mysqli($servername, $username, $password, $dbname);
           				// Check connection
           				if ($conn->connect_error) {
           					die("Connection failed: " . $conn->connect_error);
           				}
                   $id = $_SESSION["accno"];
           				$sql = "SELECT * FROM transaction n where n.acc_no='$id'";
           				$result = $conn->query($sql);

           				if ($result->num_rows > 0) {
           					echo "<tr><th>ID</th><th>Type</th><th>Status</th><th>TimeStamp</th></tr>";
           					// output data of each row
           					while($row = $result->fetch_assoc()) {
           						echo "<tr><td>" . $row["tra_id"]. "</td><td>" . $row["tra_type"].  "</td><td>". $row["tra_status"]."</td><td>". $row["tra_time"]."</td></tr>";
           					}
           					echo "<br><br></table></div>";
           				} else {
           					echo "<br><br><h4>0 Results</h4>";
           				}

           				$conn->close();
           			?>
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
