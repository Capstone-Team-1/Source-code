<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="voting"; // Database name
$tbl_name="employee"; // Table name
// Connect to server and select databse.

$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect");

mysqli_select_db($conn, "$db_name")or die("cannot select DB");
// username and password sent from form
$myuser=$_POST['employeeUsername'];
$mypassword=$_POST['employeePassword'];
// To protect MySQL injection (more detail about MySQL injection)
$myuser = stripslashes($myuser);
$mypassword = stripslashes($mypassword);
$myuser = mysqli_real_escape_string($conn, $myuser);
$mypassword = mysqli_real_escape_string($conn, $mypassword);
$sql="SELECT * FROM employee WHERE employeeUsername='$myuser' and employeePassword='$mypassword'";
$result=mysqli_query($conn, $sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
/* session_start();
session_register("myuser");
session_register("mypassword");  */
header("location: success.php");
}
else {
echo "Wrong Username or Password";
}
?>