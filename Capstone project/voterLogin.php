<?php

include 'connection.php';
session_start();
error_reporting(0);

//this is checking if the user has already signed in if signed in then the location will be towards candidate.php
if(($_SESSION['citizenID']))
 {
        header("Location:candidate.php");
    }

if (isset($_POST['submit'])) {
  $myuser = $_POST['citizenID'];
  $mypassword = md5($_POST['citizenPassword']);
  // To protect MySQL injection (more detail about MySQL injection)

  $sql = "SELECT * FROM citizen WHERE citizenID ='$myuser' and citizenPassword ='$mypassword'";

  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['citizenID'] = $row['citizenID'];
    $_SESSION['citizenFName'] = $row['citizenFName'];
    $_SESSION['citizenLName'] = $row['citizenLName'];
    header("Location: candidate.php");
  } else {
    echo "<script> alert('Login failed') </script>";
    header('index.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voter's Login</title>
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
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
      <div class="banner-items" style="text-align: center; font-size: 20px;">
        <br>
        <br>
        <h2>Voter Login Page</h2>

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
        <input type="text" placeholder="ID Number" id="vid" name="citizenID" required></input>
        <br>
        <br>
        <label for="citizenPassword"></label>
        <input type="password" placeholder="Password" id="pw" name="citizenPassword" required></input>
        <br>
        <br>
        <input type="submit" class="button" Value="Login" name="submit"></input>
        <br>
        <br>
        Not registred? Please, <a href="./register.php" style="color:#4c5ae0;">Register Here</a>
      </form>


    </div>
  </div>
  
  <footer>
    <div class="footer-details">
      <h3>Election Comission of Australia</h3>
      <p>The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>


      <div class="footer-container" style="margin-top: 50px;">
        <div class="footer-item"> <a href="./login.php">Voters Login</a></div>
        <div class="footer-item"> <a href="./registration.php">Create Account</a></div>
        <div class="footer-item"> <a href="./about.php">About Elections</a></div>
        <div class="footer-item"> <a href="./about.php">Instructive Video</a></div>
        <div class="footer-item"> <a href="./adminLogin.php">Staff Login</a></div>
        <div class="footer-item"> <a href="./contactus.php">Contact Us</a></div>
      </div>
    </div>
    <!--This div in particular contains links to various platforms and is set to flex-->

    <div class="footer-social-links">

      <div>
        <ion-icon name="logo-facebook"></ion-icon>
      </div>
      <div>
        <ion-icon name="logo-twitter"></ion-icon>
      </div>
      <div>
        <ion-icon name="logo-instagram"></ion-icon>
      </div>
    </div>

  </footer>


  <script src="./JavaScript/script.js"></script>
  <!--This is the script towards the google translator api script file-->
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>