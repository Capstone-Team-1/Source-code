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

  <!-- ------- this code was at the top of this page. I (JUAN) commented and pasted here to try another connection
write the php opening tag to use

include 'connection.php';
session_start();
error_reporting(0);
//session start done so that browser can know about who the user is once log in
if (isset($_SESSION["votersId"])) {
  header("Location: ./candidate.php");
}
//the isset method keeps the session id and the directs the users towards candidate page if the user is authorised



//Here we check whether the available informatioon is in database or not 
if (isset($_POST["login"])){
  
  $citizenID = mysqli_real_escape_string($conn, $_POST["votersId"]); //if you check the forms the value on the post methods match hence they communicate with each other regarding the infromation entered
$citizenVPW = mysqli_real_escape_string($conn, md5($_POST["passWord"]));
//$citizenVCPW = mysqli_real_escape_string($conn, md5($_POST["cpassWord"]));
     //   $citizenCPW = mysqli_real_escape_string($conn, md5($_POST["confirmpw"]));
 $checkcitizenID = mysqli_query($conn, "SELECT * FROM citizen WHERE citizenID='$citizenID' AND citizenPassword = '$citizenVPW'");
 $citizenName = mysqli_query($conn, "SELECT citizenFName, citizenLName FROM citizen WHERE citizenID = '$citizenID'");
 //This is the query to check the information passed on
 //$fetchCitizenUsername = mysqli_query($conn, "SELECT citizenFName, citizenLName FROM citizen WHERE citizenID='$citizenID' AND citizenPassword = '$citizenVPW'");
if(mysqli_num_rows($checkcitizenID)>0){   //if citizen id is present than it will direct the user with record of session
  $row = mysqli_fetch_assoc($checkcitizenID);
  $_SESSION['votersId']= $row['citizenID'];
 $row = mysqli_fetch_assoc($citizenName);
  $_SESSION['citizenFName']= $row['citizenFName'];
  $_SESSION['citizenLName'] = $row['citizenLName'];
  header("Location : ./candidate.php");

}

else{

  echo "<script> alert('The details does not match') </script>";
}
}
?> -->
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
    <a href="./Index.php"> <img src="./Images/Citizens Electoral.jfif " alt="ecoa logo" class="logo"></a>
    <h1 class="first">Election Commission of Australia</h1>
    <div class="sticky-mobile-nav">
      <ion-icon name="menu"></ion-icon>
    </div>
    <div class="container">
    <div class="item zero"> <a href="./Index.php"> Home</a> </div>
      <div class="item one">
        <div class="dropdown"> For Voters
          <div class="dropdown-content">
            <a href="./login.php">Voter Login</a>
            <a href="./register.php"> Registration</a>
          </div>
        </div>
      </div>
      <!-- <div class="item two"> Candidates </div> -->
      <div class="item three"> <a href="./about.php"> About election</a>

      </div>
      <div class="item four"> Information Centre</div>
      <div class="item five "> <a href="./admin.php"> ECOA</a> </div>

    </div>
 
  </header>


  <section class="banner">

    <div class="banner-container">
      <div class="banner-items">
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
      <p id="template"></p>

      <form action="tryloginCITIZEN.php" method="POST" onsubmit="return validate();">
        <label for="citizenID"></label>
        <input type="text" placeholder="Citizen's ID" id="vid" name="citizenID" required">
        <input type="password" placeholder="Password" id="pw" name="citizenPassword" required>
        <input type="submit" class="button" Value="Login"></input>
        <br>
        <label for="check"> Not registered?
          <br>Click the link below to register yourself
        </label>
        <a href="register.php" style="color:red;"> Register Now</a>
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