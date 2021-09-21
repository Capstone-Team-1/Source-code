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
                    <form action="" method="GET" onsubmit="return validateRegister();">
                        <br>
                        <br> 
                        <label for="fname"> Candidate Party : </label>
                        <input type="text" name="Party" id="Party" placeholder="Candidate Party"><br>
                        <label for="lname"> Candidate Name : </label>
                        <input type="text" name="Name" id="Name" placeholder="Candidate Name"><br>
                        <label for="Ideology">Ideology &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
                        <input type="text" name="Ideology" id="Ideology" placeholder="Ideology">
                        <br>
                        <br>
                        <input type="submit" class="button">
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