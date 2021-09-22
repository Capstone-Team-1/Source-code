<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./CSS/style.css">

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
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
      <div class="banner-items">
      
    <br>
    <h2 class="banner-header">ECOA ONLINE VOTING SYSTEM

      </div>
    </div>
<div class="main-article">
    <div class="section-video" style="Margin-top:20px">
        <h1> ECOA Online Voting System</h1> 
 <iframe height="350" width="600"
      src="https://www.youtube.com/embed/NTGqmKAUhSk">
   </iframe>
     
<p  style=" font-size: 1.4rem;
  text-align: justify;"
> We want all the eligible Australians to vote in the Federal Election.
    AEC mobile polling teams visit many voters who are not able to get to a polling place. Mobile polling facilities are set up in some hospitals, nursing homes, prisons and remote areas of Australia. Mobile polling is carried out around Australia during the election period.

A list of locations the AEC will be visiting will be available in the weeks after an election is announced. </p>
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



    <script src="./JavaScript/register.js"></script>
    <!--This is the script towards the google translator api script file-->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

</body>

</html>