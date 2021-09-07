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
    <title>Voters List Page</title>

    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
<header>
 <img src="./Images/Citizens Electoral.jfif " alt="ecoa logo" class="logo">
        <h1 class="first">Election Commission of  Australia</h1>
        <div class="sticky-mobile-nav" ><ion-icon name="menu"></ion-icon></div>
        <div class="container">
                    <div class="item one">

                        <a href="./dashboard.php">Dashboard</a>
                    </div>
                        <div class="item two"><a href="./votersAdminpage.php"> Voters </a></div>
                    <div class="item three"><a href="./eycandidateRegister.php"></a> Candidate Register </div>
                    <div class="item four"> Election Results </div>
                    <!---  <div class="item six"><ion-icon name="menu"></ion-icon></div>-->
                </div>
    </header>   
<h1>list all Citizens here</h1> 
</body>
</html>