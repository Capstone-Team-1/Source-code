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

        <header>
            <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

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
        <li><a href="./electionsResults.php">Elections Resutls</a></li>
        <li><a href="./logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class = "user-name" style="position:absolute; bottom: 44%; left: 88% ; font-size: 1.3rem; color:purple;">         <?php  echo $_SESSION['citizenFName']. " ". $_SESSION['citizenLName'] ?>
    </header>
            <section class="banner">

                <div class="banner-container">
                    <div class="banner-items">
                        <h2 class="banner-header">
                            <br> Welcome to ECOA online voting platform
                            <br>Please Register Yourself !!!!!
                        </h2>

                    </div>
                </div>
                <div class="section-form">
                    <h2>Election Commission Of Australia </h2>
                    <p id="template"></p>
                    <form action="" method="GET" onsubmit="return validateRegister();">
                        <br>
                        <br>
                        <label for="canid"> Citzenship ID &nbsp &nbsp : </label>
                        <input type="text" name="canid" id="canid" placeholder="Candidate ID"><br>  
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
                                <p style="font-family: 'Dancing Script', cursive;">The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>
                                <div class="footer-container" style="margin-top: 50px;">
                                    <div class="footer-item one"> For Voters</div>
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
                <script src="./Capstone project/JavaScript/register.js"></script>
    </body>

</html>