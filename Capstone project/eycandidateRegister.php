<?php 

error_reporting(0); //unwanted error to zero 
session_start(); //to track the record of the user as a session variable
include 'connection.php'; //links the connection php to this page


if(empty($_SESSION['employeeID']))
 {
        header("Location:dashboard.php"); //if user has already logged in and not pressed the session destroy then the header will always be towards the dashboard page.
    }


if (isset($_POST["submit_can"])) { //taking up the variable obtained via post method and no null approach
$candidateID = mysqli_real_escape_string($conn, $_POST["ID"]);
  $candidateParty = mysqli_real_escape_string($conn, $_POST["Party"]); //taking the users session ID as a inmput
  $candidateName = mysqli_real_escape_string($conn, $_POST["Name"] ); //to prevent sql injection 
  $candidateIdeology = mysqli_real_escape_string($conn, $_POST["Ideology"] ); 

  $checkcandidate= mysqli_num_rows(mysqli_query($conn, "SELECT candidateID FROM vote WHERE candidateID='$candidateID'")); //to check the user vote status
  if ($checkcandidate > 0) { //greater than 0 same candidate will not manupulate any feild in the database
 ##checking if the candidadate has already been registered
 header('location: alreadyInserted.php'); //if canidadate has already been inserted then this page will be shown

  } else if ($checkcandidate> 1) { //similarly checking the count
    echo "<script> alert('Hey the candidate has already been registered');
    </script>";
  } else {
   $insert_can = "INSERT INTO candidate ( candidateID, candidateParty, candidateName, candidateIdeology) VALUES ($candidateID, $candidateParty, $citizenName, $candidateIdeology)"; // if the user has not voted then the vote is inserted as per the selection obtained from the user inputs
            $insert_candidate = mysqli_query($conn, $insert_can);
    header("Location: candidateRegistrationSuccess.php"); //once voted user gets directed towards this page
    if ($insert_candidate) {
//further verifiaction of user input
    $candidateID = "";
  $candidateParty =  ""; //taking the entered candidate details
  $candidateName = "";
  $candidateIdeology = "";
     

      echo "<script> alert ('success.'); </script>";
    } else {
      echo "<script> alert ('failed.'); </script>";
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body>
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
      <li><a href="./dashboard.php">Dashboard</a></li>
        <li><a href="./voterList.php">Voters List</a></li>
        <li><a href="./eycandidateRegister.php">Candidate Register</a></li>
        <li><a href="./electionResults.php">Election Resutls</a></li>
        <li><a href="./logout.php">Logout</a></li>
        </ul>
    </nav>
     <!-- <div class = "user-name" style="position:absolute; bottom: 44%; left: 88% ; font-size: 1.3rem; color:purple;">     <?php  echo $_SESSION['employeeFirstName']. " ". $_SESSION['employeeLastName'] ?> -->
    </header>

            <section class="banner">

                <div class="banner-container">
                    <div class="banner-items">
                        <h2 class="banner-header">
                            <br> New Candidate Registration Page
                        </h2>

                    </div>
                </div>
                <div class="section-form">
                    <h2>Election Commission Of Australia </h2>
                    <p id="template"></p>
                    <form action="" method="POST" onsubmit="return validateRegister();">
                        <br>
                        <br> 
                        
                         
                        <input type="text" name="ID" id="canID" placeholder="Candidate ID" required><br>
                       
                            
                            
                            <br>
                        <input type="text" name="Party" id="Party" placeholder="Candidate Party" required><br>
                      
                             <br>
                        <input type="text" name="Name" id="Name" placeholder="Candidate Name" required><br>
 <br>
                         
                        <input type="text" name="Ideology" id="Ideology" placeholder="Ideology" required>
                        <br>
                        <input type="submit" class="button" name="submit_can">
                    </form>
                </div>
                <footer>
                    <div class="footer-banner">
                        <h3 style="color: azure; font-size: 1.1em; font-weight: 550px;">Election comission of Australia</h1>
                            <div class="footer-details">
                                <p >The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>
                                 <div class="footer-container" style="margin-top: 50px;">
        <div class="footer-item"> <a href="./voterLogin.php">Voters Login</a></div>
        <div class="footer-item"> <a href="./register.php">Create Account</a></div>
        <div class="footer-item"> <a href="./about.php">About Elections</a></div>
        <div class="footer-item"> <a href="./about.php">Instructive Video</a></div>
        <div class="footer-item"> <a href="./adminLogin.php">Staff Login</a></div>
        <div class="footer-item"> <a href="./contactus.php">Contact Us</a></div>
      </div>
    </div>
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
                <script src="./Capstone project/JavaScript/register.js"></script>
    </body>

</html>