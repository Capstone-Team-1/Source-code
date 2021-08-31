<?php
include 'connection.php';
session_start();

if (isset($_SESSION["votersId"])) {
  header("Location: candidate.php");
}





if (isset($_POST["login"])){
  
  $citizenID = mysqli_real_escape_string($conn, $_POST["votersId"]);
$citizenVPW = mysqli_real_escape_string($conn, md5($_POST["passWord"]));
//$citizenVCPW = mysqli_real_escape_string($conn, md5($_POST["cpassWord"]));
     //   $citizenCPW = mysqli_real_escape_string($conn, md5($_POST["confirmpw"]));
 $checkcitizenID = mysqli_query($conn, "SELECT * FROM citizen WHERE citizenID='$citizenID' AND citizenPassword = '$citizenVPW' AND citizenFName AND CitizenLName");
 //$fetchCitizenUsername = mysqli_query($conn, "SELECT citizenFName, citizenLName FROM citizen WHERE citizenID='$citizenID' AND citizenPassword = '$citizenVPW'");
if(mysqli_num_rows($checkcitizenID)>0){
  $row = mysqli_fetch_assoc($checkcitizenID);
  $_SESSION['votersId']= $row['citizenID'];
  $_SESSION['citizenName'] = $row['citizenFName'];
  header("Location : candidate.php");

}

else{

  echo "<script> alert('The details does not match') </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <link rel="stylesheet" href="../CSS/style.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
     
    </style>
</head>
<body>
    
     <header>
         <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
<header>
 <a href="../Index.php">  <img src="../Images/Citizens Electoral.jfif " alt="ecoa logo" class="logo"></a>  
        <h1 class="first">Election Commission of  Australia</h1>
        <div class= "container">
          <div class="item one">
                 
            <a href="../Index.php">Homepage</a> </div>
              <div class="item two">For candidates </div>
               <div class="item three"> About election </div>
                <div class="item four"> Information Centre</div>
                 <div class="item five ">  <a href="./admin.php"> ECOA</a> </div>
               <!---  <div class="item six"><ion-icon name="menu"></ion-icon></div>-->
        </div>
    </header>


    <section class="banner">
     
            <div class="banner-container">
              <div class="banner-items" >
                <h2 class="banner-header">
                    <br> Welcome to ECOA online voting platform
                    <br>Please fill up the form to continue!
                </h2>
               
                    </div>
        </div>
</section>
<div class="section-form">  
<div class="login">
     <h2>Election Commission Of Australia </h2>
    <p id= "template"></p>
    
<form action="" method="POST" class = "siginForm" onsubmit="return validate();">
<label for="vid">
    Voters ID
</label> 
<br>
<br>
<input type="placeholder" name="votersId" id="vid" >
<br>
<br>
<label for="pw">Password</label>
<br>
<br>
<input type="password" name="passWord" id="pw">
<br>
<br>
<br>
<!-- <label for="pw">Confirm Password</label>
<br>
<br>
<input type="password" name="cpassWord" id="pw" value=" <?php echo $_POST['cpassWord']; ?>">
<br>
<br> -->
<input type="submit" name ="login" class="button">

<br>
<br>
<label for="check">
    Not registered?
    <br>
    <br>
    Click the link below to register yourself
</label>
<br>
<br>
<a href="register.php" style="color:red;"> Register Now</a>

</form>


<div></div>

</div>
</div>
<footer>

<div class="footer-banner" style="text-align: justify;" >
    <h3 style="color: azure; font-size: 1.1em; font-weight: 550px;">Election comission of Australia</h1>

<div class= "footer-details">
    <p style="font-family: 'Poppins', sans-serif; font-size: 1.1em;">The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>   


     <div class= "footer-container" style="margin-top: 50px;"> 
             <div class="footer-item one"> Homepage</div>
              <div class="footer-item two">For candidates </div>
               <div class="footer-item three"> About election </div>
                <div class="footer-item four"> Information Centre</div>
                 <div class ="footer-item five "> The ECOA </div>
                  </div>




</div>

       <div class="footer-link">

                    <div class="footxer-link-one">   <a href="https://www.facebook.com/pages/AEC%20-%20Australian%20Electoral%20Commission/122364357847301/"> <ion-icon name="logo-facebook"></ion-icon></a>  </div>
                    <div class="footxer-link-two">   <a href="https://twitter.com/auselectoralcom"> <ion-icon name="logo-twitter"></ion-icon></a>   </div>
                      <div class="fooxter-link-three">   <a href="https://www.facebook.com/pages/AEC%20-%20Australian%20Electoral%20Commission/122364357847301/"> <ion-icon name="logo-instagram"></ion-icon></a>  </div>
                       
                </div> 
         




</div>

       
 </footer>
    



<script src="../JavaScript/script.js"></script>

</body>
</html>