<?php

include'connection.php';
session_start();
error_reporting(0);
 if (isset ($_POST['login'])){
$myuser=$_POST['vid'];
$mypassword= ($_POST['pw']);
// To protect MySQL injection (more detail about MySQL injection)

$sql="SELECT * FROM employee WHERE employeeID ='$myuser' and employeePassword ='$mypassword'";

$result=mysqli_query($conn, $sql);
if($result -> num_rows>0){
$row= mysqli_fetch_assoc($result);
$_SESSION['employeeFirstName'] = $row['employeeFirstName'];
$_SESSION['employeeLastName'] = $row['employeeLastName'];
header("Location: dashboard.php");
}

else{
    echo "<script> alert('Login failed') </script>";
    header('index.php');
} }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <link rel="stylesheet" href="./CSS/style.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
     
    </style>
</head>
<body>
    
     
         <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
     <!--The div underneath contains the google translator link and initial langugage is set to english with en ----->
<div id="google_translate_element"></div>
 <script type="text/javascript"> 
   function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
</script>
<header>
 <a href="./Index.php">  <img src="./Images/Citizens Electoral.jfif " alt="ecoa logo" class="logo"></a>  
        <h1 class="first">Election Commission of  Australia</h1>
        <div class="sticky-mobile-nav" ><ion-icon name="menu"></ion-icon></div>
        <div class= "container">
          <div class="item one">
             <a href="../Index.php">Homepage</a> </div>
              <div class="item two">For candidates </div>
               <div class="item three"> About election </div>
                <div class="item four"> Information Centre</div>
                 <div class="item five ">    <a href="./admin.php"> ECOA</a> </div>
               <!---  <div class="item six"><ion-icon name="menu"></ion-icon></div>-->
        </div>
    </header>


    <section class="banner">
     
            <div class="banner-container">
              <div class="banner-items" >
                <h2 class="banner-header">
                    <br> Admin Login
                    <br>Please fill up the form to continue!
                </h2>
               
                    </div>
        </div>

<div class="section-form">  
<div class="login">
    <h2>Election Commission Of Australia </h2>
    <p id= "template"></p>
    
<form action="" method="POST" onsubmit="return validate();" >

<br>
<br>
<input type="placeholder" name="vid" id="vid" placeholder="Admin ID">

<br>
<br>
<input type="password" name="pw" id="pw" placeholder="Password">
<br>
<br>
<input type="submit" name="login" class="button">

<br>
<br>

<label for="check">
    Are you a voter?
    <br>
    <br>
    Click the link below to be directed towards voters page!!
</label>
<br>
<br>
<a href="./login.php" style="color:red;"> Voters Login</a>

</form>



<div></div>

</div>
</div>
<footer>

<div class="footer-banner" >
    <h3 style="color: azure; font-size: 1.1em; font-weight: 550px;">Election comission of Australia</h1>

<div class= "footer-details">
    <p style="font-family: 'Poppins', sans-serif; font-size: 1.1em; justify-content:center">The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>


     <div class= "footer-container" style="margin-top: 50px;"> 
             <div class="footer-item one">   <a href="./result.php"> For Voters</a>  </div>
              <div class="footer-item two">For candidates </div>
               <div class="footer-item three"> About election </div>
                <div class="footer-item four"> Information Centre</div>
                 <div class ="footer-item five "> The ECOA </div>
                  </div>




</div>

       <div class="footer-link">

                    <div class="footxer-link-one">   <ion-icon name="logo-facebook"></ion-icon></div>
                    <div class="footxer-link-two"> <ion-icon name="logo-twitter"></ion-icon></div>
                      <div class="fooxter-link-three"> <ion-icon name="logo-instagram"></ion-icon></div>
                       
                </div> 
         




</div>

       
 </footer>
    



<script src="../JavaScript/script.js"></script>
  <!--This is the script towards the google translator api script file-->
    <script type="text/javascript" 
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

</body>
</html>