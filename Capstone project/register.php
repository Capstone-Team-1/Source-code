<?php

include 'connection.php';
error_reporting(0);
if (isset($_POST["signup"])) {
  echo "connection is done";
  $citizenID = mysqli_real_escape_string($conn, $_POST["citizenID"]);
  $citizenFName = mysqli_real_escape_string($conn, $_POST["citizenFName"]);
  $citizenLName = mysqli_real_escape_string($conn, $_POST["citizenLName"]);
  $citizenPhone = mysqli_real_escape_string($conn, $_POST["citizenPhonenum"]);
  $citizenDOB = mysqli_real_escape_string($conn, $_POST["citizenDOB"]);
  $citizenEmail = mysqli_real_escape_string($conn, $_POST["citizenEmail"]);
  $citizenAddress = mysqli_real_escape_string($conn, $_POST["citizenAddress"]);
  $citizenCity = mysqli_real_escape_string($conn, $_POST["citizenCity"]);
  $citizenState = mysqli_real_escape_string($conn, $_POST["citizenState"]);
  $citizenZip = mysqli_real_escape_string($conn, $_POST["citizenZip"]);
  $citizenPW = mysqli_real_escape_string($conn, md5($_POST["pw"]));
  $citizenCPW = mysqli_real_escape_string($conn, md5($_POST["confirmpw"]));

  $checkregestringID = mysqli_num_rows(mysqli_query($conn, "SELECT citizenID FROM citizen WHERE citizenID='$citizenID'"));
  if ($citizenPW !== $citizenCPW) {
    echo "<script> alert ('Sorry your password does not match.'); </script>"; ##checking if the input data match

  } else if ($checkregestringID > 1) {
    echo "<script> alert('Hey you have already registered please log in');
    </script>";
  } else {
    $sql = " INSERT INTO citizen(citizenID, citizenFName, citizenLName, citizenPhone, citizenDOB, citizenEmail, citizenAddress, citizenCity, citizenState, citizenZip, citizenPassword, citizenAllowed, employeeID) VALUES ('$citizenID','$citizenFName','$citizenLName','$citizenPhone','$citizenDOB','$citizenEmail','$citizenAddress','$citizenCity','$citizenState','$citizenZip','$citizenPW','0','1') ";
    $result = mysqli_query($conn, $sql);
    header("Location: success.php");
    if ($result) {

      $_POST["citizenID"] = "";
      $_POST["citizenFName"] = "";
      $_POST["citizenLName"] = "";
      $_POST["citizenPhonenum"] = "";
      $_POST["citizenDOB"] = "";
      $_POST["citizenEmail"] = "";
      $_POST["citizenAddress"] = "";
      $_POST["citizenCity"] = "";
      $_POST["citizenState"] = "";
      $_POST["citizenZip"] = "";
      $_POST["pw"] = "";
      $_POST["confirmpw"] = "";

      echo "<script> alert ('User registration success.'); </script>";
    } else {
      echo "<script> alert ('user registration failed.'); </script>";
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./CSS/style.css">

</head>

<body>

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
      <h2 >Voter Registration Page</h2>

      </div>
    </div>
  </section>
  
  <div class="section-form">
    <div class="login">
      <h3>Please enter your details </h3>
      <p id="template"></p>
    <br>
        <form action="#" method="post" onsubmit="return validateRegister();">

          <p id="msg" style="color:red;"></p>

          <input type="text" name="citizenFName" id="fname" placeholder="First Name" value="<?php echo $_POST["citizenFName"]; ?>">
          <input type="text" name="citizenLName" id="lname" placeholder="Last Name" value="<?php echo $_POST["citizenLName"]; ?>">
          <input type="number" name="citizenID" id="cid" placeholder="Citizenship ID" value="<?php echo $_POST["citizenID"]; ?>">
          <input type="number" name="citizenPhonenum" id="phonenum" placeholder="Phone Number" value="<?php echo $_POST["citizenPhonenum"]; ?>">
          <input type="date" name="citizenDOB" id="Dateof" placeholder="dd/mm/yyyy" value="<?php echo $_POST["citizenDOB"]; ?>">
          <input type="email" name="citizenEmail" id="cEmail" placeholder="Email" value="<?php echo $_POST["citizenEmail"]; ?>">
          <input type="text" name="citizenAddress" id="caddress" placeholder="Address" value="<?php echo $_POST["citizenAddress"]; ?>">
          <input type="text" name="citizenCity" id="city" placeholder="City" value="<?php echo $_POST["citizenCity"]; ?>">
          <select name="citizenState" id="state" value="<?php echo $_POST["citizenState"]; ?>">
            <option value="NSW">New South Wales</option>
            <option value="VIC">Victoria</option>
            <option value="SA">South Australia</option>
            <option value="WA">Western Australia</option>
            <option value="TAS">Tasmania</option>
            <option value="QLD">Queensland</option>
            <option value="NT">Northern Territory</option>
          </select>
          <!-- <input type="text" name="citizenState" id="state" placeholder="State" value="<?php echo $_POST["citizenState"]; ?>"> -->
          <input type="number" name="citizenZip" id="Zip" placeholder="Postal Code" value="<?php echo $_POST["citizenZip"]; ?>">
          <br>
          <label for="pw">Insert a Password &nbsp &nbsp &nbsp </label>
          <input type="password" name="pw" id="Citizenpw" placeholder="Password" value="<?php echo $_POST["pw"]; ?>">
          <br>
          <label for="confirmpw">Confirm the Password</label>
          <input type="password" name="confirmpw" id="cpw" placeholder="Password" value="<?php echo $_POST["confirmpw"]; ?>">
          <br>
          <br>
          <input type="submit" class="button" name="signup" value="SIGN UP">
          <br>
          <br>
          Do you have an account? Please, <a href="./login.php" style="color:#4c5ae0;">Login Here</a>
        </form>

      </div>
    </div>
      <footer>

<div class="footer-banner">
  <h3 style="color: azure; font-size: 1.1em; font-weight: 550px;">Election comission of Australia</h1>

    <div class="footer-details">
      <p style="font-family: 'Poppins', sans-serif; font-size: 1.1em; justify-content:center">The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>


      <div class="footer-container" style="margin-top: 50px;">
        <div class="footer-item one"> <a href="./result.php"> For Voters</a> </div>
        <div class="footer-item two">For candidates </div>
        <div class="footer-item three"> About election </div>
        <div class="footer-item four"> Information Centre</div>
        <div class="footer-item five "> The ECOA </div>
      </div>




    </div>

    <div class="footer-link">

      <div class="footxer-link-one">
        <ion-icon name="logo-facebook"></ion-icon>
      </div>
      <div class="footxer-link-two">
        <ion-icon name="logo-twitter"></ion-icon>
      </div>
      <div class="fooxter-link-three">
        <ion-icon name="logo-instagram"></ion-icon>
      </div>

    </div>





</div>


</footer>




      <script src="./JavaScript/register.js"></script>
      <!--This is the script towards the google translator api script file-->
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
      </script>

  </body>

</html>