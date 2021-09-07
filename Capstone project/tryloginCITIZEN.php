<!-- <?php
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

$checkcitizenID = mysqli_query($conn, "SELECT * FROM citizen WHERE citizenID='$myuser' AND citizenPassword = '$mypassword'");
 $citizenName = mysqli_query($conn, "SELECT citizenFName, citizenLName FROM citizen WHERE citizenID = '$myuser'");
 //This is the query to check the information passed on
 //$fetchCitizenUsername = mysqli_query($conn, "SELECT citizenFName, citizenLName FROM citizen WHERE citizenID='$citizenID' AND citizenPassword = '$citizenVPW'");
if(mysqli_num_rows($checkcitizenID)>0){   //if citizen id is present than it will direct the user with record of session
  $row = mysqli_fetch_assoc($checkcitizenID);
 $citizenName = mysqli_query($conn, "SELECT citizenFName, citizenLName FROM citizen WHERE citizenID = '$myuser");
 $row = mysqli_fetch_assoc($citizenName);
  $_SESSION['citizenFName']= $row['citizenFName'];
  $_SESSION['citizenLName'] = $row['citizenLName'];
  header("Location : ./candidate.php");

}

else{

  echo "<script> alert('The details does not match') </script>";
}
?> -->