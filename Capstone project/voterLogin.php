<?php

include 'connection.php'; //including the connection php to connect to database
session_start(); //this is keeping the record of session user details
error_reporting(0);
  //minimizing unwanted minimal error
//this is checking if the user has already signed in if signed in then the location will be towards candidate.php
if(($_SESSION['citizenID']))
 {
        header("Location:candidate.php"); //if user has already logged in then the user will head towards candidate page, this condition will only work if the user did not click the log out button
    }

if (isset($_POST['submit'])) { 
  sleep(1);//taking the user input using POST method and follwing the no null isset method
  $myuser = $_POST['citizenID']; //the variable will be equal to the input entered in the input field
  $mypassword = md5($_POST['citizenPassword']);  // To protect MySQL injection (more detail about MySQL injection) and to encypt it in hash value

  $sql = "SELECT * FROM citizen WHERE citizenID ='$myuser' and citizenPassword ='$mypassword'"; //this is to check the received input in the citizen table

  $result = mysqli_query($conn, $sql); //query to check the value with connection from our database voting
  if ($result->num_rows > 0) { 
    $row = mysqli_fetch_assoc($result); //this checks the user info in the database
    $_SESSION['citizenID'] = $row['citizenID']; //if feilds match then it fetches and stores the user ID as a session variable
    $_SESSION['citizenFName'] = $row['citizenFName']; //storing user firstname in a session variable to display the user details 
    $_SESSION['citizenLName'] = $row['citizenLName'];//storing user lastname in a session variable to display the user details 
    header("Location: candidate.php"); //upon login the header is candidate.php page
  } else { //this condition  triggers if the user details does not match the table.
    echo "<script> alert('Invalid User Name or Password')
    document.getElementbyID('template').innerHTML= 'Invalid UserName or Password' </script>";
    // header('Location: voterLogin.php'); //the user will get directed towards the register page upon failed login
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
      <!-- The empty paragrapg tag will fire some message if the data doesnot match as required -->
      <p id="template"></p>
      <br> 
      <!-- The form input will be passed to the PHP using post method and upon submit JS function validate is invoked which cheks the input fields -->
      <form action="" method="POST" onsubmit="return validate();">
        <label for="citizenID"></label>
        <!-- each input has it own unique ID assigned to it for validation purpose -->
        <input type="text" placeholder="ID Number" id="vid" name="citizenID" ></input>
        <br>
        <br>
        <label for="citizenPassword"></label>
        <input type="password" placeholder="Password" id="pw" name="citizenPassword"></input>
        <br>
        <br>
        <input type="submit" class="button" Value="Login" name="submit"></input>
        <br>
        <br>
        <!-- Link placed underneath to head user if user has not registered yet -->
        Not registered? Please, <a href="./register.php" style="color:#4c5ae0;">Register Here</a>
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


  <script src="./JavaScript/script.js"></script>
  <!--This is the script towards the google translator api script file-->
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>