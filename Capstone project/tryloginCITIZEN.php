<?php
 include 'connection.php';

$myuser=$_POST['citizenID'];
$mypassword=$_POST['citizenPassword'];
// To protect MySQL injection (more detail about MySQL injection)
$myuser = stripslashes($myuser);
$mypassword = stripslashes($mypassword);
$myuser = mysqli_real_escape_string($conn, $myuser);
$mypassword = mysqli_real_escape_string($conn, md5($mypassword));
$sql="SELECT * FROM citizen WHERE citizenID ='$myuser' and citizenPassword ='$mypassword'";
$result=mysqli_query($conn, $sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
/* session_start();
session_register("myuser");
session_register("mypassword");  */
header("location: candidate.php");
}
else {
echo " <script> alert('Wrong Username or Password') </script>";
header('location: login.php');
}
?>