<?php

include 'connection.php'; //includes the connection php file which connects to the database
session_start(); //session record tracker
error_reporting(0);
//this is checking if the user has already signed in if signed in then the location will be towards candidate.php
if(($_SESSION['employeeID']))
 {
        header("Location:dashboard.php"); //if user has already logged in and not pressed the session destroy then the header will always be towards the dashboard page.
    }
if (isset($_POST['login'])) { //following the no null and the input obtained from the post method once the login button is clciked
  $myuser = $_POST['vid']; //user entered ID.
  $mypassword = ($_POST['pw']); //user entered password
  // To protect MySQL injection (more detail about MySQL injection)

  $sql = "SELECT * FROM employee WHERE employeeID ='$myuser' and employeePassword ='$mypassword'"; //this query to check the input to the employee table

  $result = mysqli_query($conn, $sql); //query to connect the input and the database
  if ($result->num_rows > 0) { //upon successful check user session details is recorded in a session variable
    $row = mysqli_fetch_assoc($result);
    $_SESSION['employeeID']= $row['employeeID']; //stores session ID
    $_SESSION['employeeFirstName'] = $row['employeeFirstName']; //stores session userFirstName
    $_SESSION['employeeLastName'] = $row['employeeLastName']; //stores session user lastname 
    header("Location: dashboard.php"); //once login check sucessfull the header is twoards the dashboard page
  } else {  //error message if the login is failed
    echo "<script> alert('Invalid username or password') </script>";
    
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
  <link rel="stylesheet" href="./CSS/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  <style>

  </style>
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
        <h2>Staff Login Page</h2>

      </div>
    </div>
  </section>

  <div class="section-form">
    <div class="login">
      <h3>Please enter your credentials </h3>
      <p id="template"></p>
      <br>
<!-- onsubmit the form the validated using the validate function which is present in the scrip.js file -->
      <form action="" method="POST" onsubmit="return validate();">
        <input type="text" name="vid" id="vid" placeholder="Admin ID"><br>
        <input type="password" name="pw" id="pw" placeholder="Password"><br>
        <input type="submit" name="login" class="button">
      </form>
    </div>
  </div>
  
  <footer>
    <div class="footer-details">
      <h3>Election Comission of Australia</h3>
      <p>The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>


       <div class="footer-container" style="margin-top: 50px;">
        <div class="footer-item"> <a href="./voterLogin.php">Voters Login</a></div>
        <div class="footer-item"> <a href="./register.php">Create Account</a></div>
        <div class="footer-item"> <a href="./about.php">About Elections</a></div>
        <div class="footer-item"> <a href="./about.php">Instructive Video</a></div>
        <div class="footer-item"> <a href="./adminLogin.php">Staff Login</a></div>
        <div class="footer-item"> <a href="./contactus.php">Contact Us</a></div>
      </div>
    </div>
    <!--This div in particular contains links to various platforms and is set to flex-->

     <div class="footer-social-links">

      <div>
       <a href="https://www.facebook.com/AusElectoralCom"> <ion-icon name="logo-facebook"> </ion-icon> </a> 
      </div>
      <div>
     <a href="https://twitter.com/AusElectoralCom">   <ion-icon name="logo-twitter"></ion-icon> </a>
      </div>
      <div>
      <a href="https://www.instagram.com/AusElectoralCom/">  <ion-icon name="logo-instagram"></ion-icon> </a>
      </div>
    </div>

  </footer>


  <script src="../JavaScript/script.js"></script>
  <!--This is the script towards the google translator api script file-->
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>

</body>

</html>