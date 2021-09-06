<?php
include 'connection.php';
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <link rel="stylesheet" href="../CSS/style.css">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>

    </style>
</head>

<body>

    <header>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

        <header>
            <a href="../Index.php"> <img src="../Images/Citizens Electoral.jfif " alt="ecoa logo" class="logo"></a>
            <h1 class="first">Election Commission of Australia</h1>
            <div class="container">
                <div class="item one">

                    <a href="../HTML/login.php">Dashboard</a>
                </div>
                <div class="item two"> Voters </div>
                <div class="item three"> Candidates </div>
                <div class="item four"> Election Results </div>
                <!---  <div class="item six"><ion-icon name="menu"></ion-icon></div>-->
            </div>
        </header>


        <section class="banner">

            <div class="banner-container">
                <div class="banner-items">
                    <h2 class="banner-header">
                        <!-- <br> Welcome to Admin ECOA online voting platform-->
                    </h2>

                </div>
            </div>


            <div class="section-form">
                <div class="login">

                    <br>
                    <br>
                    <h2>Admin Election Commission Of Australia </h2>
                    <p id="template"></p>
                    <form action="" method="GET" onsubmit="return validate();">
                        <label for="vid">
                        </label>
                        <br>
                        <br>
                        <input type="placeholder" placeholder='ID' name="vid" id="vid">
                        <!--<br>
<br>
<label for="pw">Password</label>
<br>
<br>-->
                        <input type="password" placeholder='Password' name="pw" id="pw">
                        <br>

                        <br>
                        <input type="submit" class="button" Value="Login">

                        <br>
                        <br>
                        <!--
<label for="check">
    Not registered?
    <br>
    <br>
    Click the link below to register yourself
</label>
<br>
<br>
<a href="../HTML/register.php" style="color:red;"> Register Now</a>
-->

                    </form>



                    <div></div>

                </div>
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




            <script src="../JavaScript/script.js"></script>

</body>

</html>