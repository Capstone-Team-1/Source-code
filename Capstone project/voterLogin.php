<?php

include'connection.php';
session_start();
error_reporting(0);
 if (isset ($_POST['submit'])){
$myuser=$_POST['citizenID'];
$mypassword= md5($_POST['citizenPassword']);
// To protect MySQL injection (more detail about MySQL injection)

$sql="SELECT * FROM citizen WHERE citizenID ='$myuser' and citizenPassword ='$mypassword'";

$result=mysqli_query($conn, $sql);
if($result -> num_rows>0){
$row= mysqli_fetch_assoc($result);
$_SESSION['citizenFName'] = $row['citizenFName'];
$_SESSION['citizenLName'] = $row['citizenLName'];
header("Location: candidate.php");
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
  <title>Voter's Login</title>
  <link rel="stylesheet" href="./CSS/style.css">

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body>


  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <!--The div underneath contains the google translator link and initial langugage is set to english with en ----->
  <div id="google_translate_element"></div>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en'
      }, 'google_translate_element');
    }
  </script>

<header>
    
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <div class="ecoa-logo">
        <img src="./Images/Citizens Electoral.jfif " alt="ecoa logo" class="logo">
        <h1 class="organization-name">Electoral Commission of Australia</h1>
    </div>
      <ul>
        <li><a href="./Index.php">Home</a></li>
        <li><a href="">Voters</a> 
          <ul class="dropdown">
          <li><a href="./voterLogin.php">Voter Login</a></li>
          <li><a href="./register.php">Registration</a></li>
          </ul>
        </li> 
        <li><a href="./about.php">About Elections</a></li>
        <li><a href="">Instructive Video</a></li>
        <li><a href="">ECOA</a>
          <ul class="dropdown">
          <li><a href="./adminLogin.php">Staff Login</a></li>
          <li><a href="./contactus.php">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    </header>


  <section class="banner">

  <div class="banner-container">
      <div class="banner-items" style ="text-align: center; font-size: 20px;">
      <br>
      <br> 
      <h2 >Voter Login Page</h2>

      </div>
    </div>
  </section>
  
  <div class="section-form">
    <div class="login">
      <h3>Please enter your credentials </h3>
      <p id="template"></p>
    <br>
      <form action="" method="POST" onsubmit="return validate();">
        <label for="citizenID"></label>
        <input type="text" placeholder="ID Number" id="vid" name="citizenID" required ></input>
        <br> 
        <br>
        <label for="citizenPassword"></label>
        <input type="password" placeholder="Password" id="pw" name="citizenPassword" required></input> 
         <br> 
        <br>
        <input type="submit" class="button" Value="Login" name="submit"></input>
        <br>
        <br>
            Not registred? Please, <a href="./login.php" style="color:#4c5ae0;">Register Here</a>
      </form>


    </div>
  </div>
  <footer>

    <div class="footer-banner" style="text-align: justify;">
      <h3 style="color: azure; font-size: 1.1em; font-weight: 550px;">Election comission of Australia</h1>

        <div class="footer-details">
          <p style="font-family: 'Poppins', sans-serif; font-size: 1.1em;">The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>


          <div class="footer-container" style="margin-top: 50px;">
            <div class="footer-item one"> Homepage</div>
            <div class="footer-item two">For candidates </div>
            <div class="footer-item three"> About election </div>
            <div class="footer-item four"> Information Centre</div>
            <div class="footer-item five "> The ECOA </div>
          </div>




        </div>

        <div class="footer-link">

          <div class="footxer-link-one"> <a href="https://www.facebook.com/pages/AEC%20-%20Australian%20Electoral%20Commission/122364357847301/">
              <ion-icon name="logo-facebook"></ion-icon>
            </a> </div>
          <div class="footxer-link-two"> <a href="https://twitter.com/auselectoralcom">
              <ion-icon name="logo-twitter"></ion-icon>
            </a> </div>
          <div class="fooxter-link-three"> <a href="https://www.facebook.com/pages/AEC%20-%20Australian%20Electoral%20Commission/122364357847301/">
              <ion-icon name="logo-instagram"></ion-icon>
            </a> </div>

        </div>





    </div>


  </footer>




  <script src="./JavaScript/script.js"></script>
  <!--This is the script towards the google translator api script file-->
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>

</body>

</html>