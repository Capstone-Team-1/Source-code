<?php
$dbServerName= "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "voting";
//everyone to change the database name to voting

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName)
 or die("database connection failed");
  // if ($conn){
  //     echo "Connection Successful";

  // }
//  else {
//      die ("Connection Failed. Reason: ".mysqli_connect_error());
//  } 




?>
