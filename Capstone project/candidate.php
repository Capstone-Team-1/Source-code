<?php 

error_reporting(0); //unwanted error to zero 
session_start(); //to track the record of the user as a session variable
include 'connection.php'; //links the connection php to this page


if(empty($_SESSION['citizenID']))
 {
        header("Location:voterLogin.php");
    } //checks if the anyone trying to access this page has been authenticated or not.



if (isset($_POST["submit_vote"])) { //taking up the variable obtained via post method and no null approach

  $citizenID = mysqli_real_escape_string($conn, $_SESSION["citizenID"]); //taking the users session ID as a inmput
  $vote = mysqli_real_escape_string($conn, $_POST["vote"] ); //to prevent sql injection 
  

  $checkcitizenID= mysqli_num_rows(mysqli_query($conn, "SELECT citizenID FROM vote WHERE citizenID='$citizenID'")); //to check the user vote status
  if ($checkcitizenID  > 0) { //greater than 0 vote for a candidate will remove the voting privilege from the voter
 ##checking if user has already voted
 header('location: alreadyvoted.php'); //if already voter the user will get different message

  } else if ($checkcitizenID > 1) {
    echo "<script> alert('Hey you have voted');
    </script>";
  } else {
   $insert_vote = "INSERT INTO vote ( voteDate, candidateID, citizenID) VALUES (now(), $vote, $citizenID)"; // if the user has not voted then the vote is inserted as per the selection obtained from the user inputs
            $insert_vote_result = mysqli_query($conn, $insert_vote);
    header("Location: sucessVoting.php"); //once voted user gets directed towards this page
    if ($insert_vote_result) {
//further verifiaction of user input
      $_SESSION["citizenID"] = "";
      $_POST["vote"] = "";
     

      echo "<script> alert ('success.'); </script>";
    } else {
      echo "<script> alert ('failed.'); </script>";
    }
  }
}
?>

<!-- this page consists of the list of candidates that are available in the election -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Page</title>
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
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
</script>
<!-- The form resposnible in storing the vote in DB -->
        <form action="" method="post">
      <div class="modal-body" id="popup">
        <!-- The id present below will alter the candiate selection as per the click by the user -->
            <p>Are you sure you want to give your vote to <strong id="candidate_ID"> </strong>  ?</p>
    
            <p>This action is irreversible.</p>
            <p>Once you click '<b>Yes</b>', you cannot change your vote.</p>
            
        
  <select id="final-list" name="vote" value="<?php echo $_POST["vote"]; ?>" style="display: none;"> 
  <option name="vote" id="candidateID"></option> 
  <!-- The option will alter as per the button clicke which is located on every candidate -->
</select>
            <button type="button" class="btnNo">No</button>
            <!-- If user clicks no button the user gets back to the main page -->
            <button type="submit" name="submit_vote" class="submit">Yes</button>
            <!-- if user clicks yes button then the vote is submitted -->
       </div>
        </form>
    <div class="blur">
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
        <li><a href="./about.php">About Elections</a></li>
        <li><a href="">Instructive Video</a></li>
        <li><a href="./contactus.php">Contact Us</a></li>
        <li><a href="./logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class = "user-name" style="position:absolute; bottom: 44%; left: 88% ; font-size: 1.3rem; color:purple;">         <?php  echo $_SESSION['citizenFName']. " ". $_SESSION['citizenLName'] ?>
    </header>


    <!-- section class starts here and it contains the banner -->
    <section class="banner">
     
            <div class="banner-container">
              <div class="banner-items" >
                <!---This h2 will display the user name as per the session --->
                <h2 class="banner-header">
<!-- we echo out the session user name which will display the user details -->
                    <br> Welcome <?php  echo $_SESSION['citizenFName']. " ". $_SESSION['citizenLName'] ?>
                    <br>Please choose in your Candidate to continue!!!
                </h2>
               
                    </div>
        </div>

      
    </section>

      
<!-- section which consists of cards which is the candidates each of them have event listeners assigned to them and they trigger when the button is clicked please check the votingpage.js for how the each button click triggers respective value accordingly -->

 <section  class="card-container">
<h3 style="margin-top: 30px; text-decoration: underline; "> Candidates for Election 2021 </h3>
 <form action="action.php" method="POST">

<!-- candidate one -->
<div class="card">
  <img src="./Images/malcolm-turnbull.jpg" alt="image " style="width: 336px;" >
  <div class="container">
    <h4><b>Malcom Turnbull: National Party of Australia</b></h4> 
    <!-- On clicking the button JS is triggered -->
     <input type="button" name="buttonOne" class="buttonOne"value="Vote"></input>
  </div>
</div>   

<!-- candidate two -->
<div class="card">
  <img src="./Images/Albanese_Anthony_170140-11__FillWzMwMCwzODBd.jpg" alt="card image"  >
  <div class="container">
    <h4><b>Anthony Albanese: Australian Labor Party</b></h4> 
  </div>
    <!-- On clicking the button JS is triggered -->
  <input type="button" name="buttonTwo" class="buttonTwo" value="Vote" ></input>
</div>  

<!-- candidate three -->
<div class="card">
  <img src="./Images/1200px-Scott_Morrison_2014.jpg" alt="card image" style="width: 336px;">
  <div class="container">
    <h4><b>Scott Morrison: Liberal Party of Australia</b></h4> 
  </div>
  <input type="button" name="buttonThree" class="buttonThree" value="Vote" ></input>
</div>  
<br>
<!-- <input type="button" name="submit_data" class="button" Value="Vote" id="submit_data"></input> -->
    </form>

</section>

<!-- Footer begins here -->
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
    

</div>

<script src="./JavaScript/votingpage.js">
</script>
  <!--This is the script towards the google translator api script file-->
    <script type="text/javascript" 
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
   

<script> 

</script>

</body>
</html>