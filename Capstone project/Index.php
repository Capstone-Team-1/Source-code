<?php
session_start();
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Election Commission of Australlia</title>
  <link rel="stylesheet" href="./CSS/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body>

  <!--The script tag contains location to fetch icons-->
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
  <!--Header contains nav and heading following the semantic tags from HTML5--->
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
        <li><a href="./instructive.php">Instructive Video</a></li>
        <li><a href="">ECOA</a>
          <ul class="dropdown">
            <li><a href="./adminLogin.php">Staff Login</a></li>
            <li><a href="./contactus.php">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <!--Section class contains all our main content present in the body as per name specified by the class--->



  <div class="banner-container">
    <div class="banner-image"> </div>
    <br>
    <br>
    <h2 class="banner-header">ECOA ONLINE VOTING SYSTEM

      <!-- <div class="banner-list">
                    <div class="banner-one" style="color: white;">
                    <a href="" style="color: white;">Log In</a>  </div>
                        <div class="banner-two"> 
                          Update my details</div>
                        <div class="banner-three">General information</div>
                </div> -->
  </div>
  </div>



  </div>



  <div class="reading-content">



     <h3>Welcome to the Live Day of ELECTION Commission of Australia Voting 2021!!!!!<br> Make a choice and set the future of Australia with your decision. </h3>
    <section>
      
      <img src="./Images/pexels-hugo-heimendinger-1766215.jpg" alt="">
  </div>
  </div>



  </div>

  <div class="main-article">
   
    <div class="reading-content">



      <h3>Welcome to the Live Day for ELECTION 2021. </h3>
      <section>
       

        <div class="main-article">
          <h3 style="color: #009cde;">WELCOME
            Welcome to our corporate plan
            
            Welcome to the Australian Electoral Commission (AEC) 2020–21 Corporate Plan, which sets our strategic direction for the next four years.</h3>
          
            <p style="font-size: 1.4rem; text-align: justify;">
            Challenges to the successful administration of electoral events continue to multiply with a number of unprecedented local and world events, most notably the COVID-19 pandemic. As a result, electoral administration continues to be an increasingly complex endeavour, and I’m conscious our commitment to improvement and innovation—and our values of professionalism, agility, quality and electoral integrity—have never been more important.


  </p> 
          <div class="section-video" style="margin: 100px">
 <iframe height="350" width="600"
      src="https://www.youtube.com/embed/JqlyqNufeWI">
   </iframe>
      <iframe height="350" width="600"
      src="https://www.youtube.com/embed/_dp_X9PsopU">
   </iframe>
     
 <iframe height="350" width="600"
      src="https://www.youtube.com/embed/3cricZYho78">
   </iframe>
     

    </div>

    
<p style="font-size: 1.4rem; text-align: justify;">
            To remain agile—now and into the future—we must continue refining our election delivery model through our lessons management approach. <br> <br> We will continue to evolve our planning processes, address the delivery of electoral events in a pandemic, and improve our delivery model for future electoral cycles.

            Elections are Australia’s largest and most complex single peacetime event. This fact is masked by the electoral administrator’s conundrum: the better and more efficient the election, the simpler the event appears to voters, candidates and political parties, most of who only interact with the voting process episodically and for a few brief <br> <br>
            There are a large number of logistically complicated and legislatively complex steps required to deliver elections successfully, including satisfying rapidly evolving community expectations. Our modernisation journey must consider these expectations as well as the realities of our funding, the availability and cost of technology, legislation and the ever-increasing threat of disinformation and cyber security. To continue to safeguard our democracy we must further mature our regulatory capability and work proactively with our stakeholders to solve these multidimensional problems.

            The modernisation of our two main election systems remains critical to ensure these can respond to future changes in legislation and our rapidly changing external environment.
            <br><br> Investing in training for our permanent employees and large temporary election workforce remains a priority, as stated in our recently launched learning and development strategy.

            This year, we have further refined our performance framework. We have re-focused the six agency directions in last year’s corporate plan to four key activities. These enable us to deliver our purpose and ensure an efficient, effective and secure electoral system for Australia. Our corporate plan continues to guide our agency and is an integral part of our performance and reporting framework.

            Tom Rogers
            Electoral Commissioner

            Compliance statement
          </p>
    
        </div>
      </section>
    </div>
  </div>
  <section class="card-container">


    <div class="card" style="width:330px">
      <img src="./Images/pexels-cottonbro-4669114.jpg" alt="image ">
      <div class="container">
        <h4><b>Make your selection</b></h4>
        <p></p>
      </div>
    </div>
    <div class="card" style="width:330px">
      <img src="./Images/pexels-artem-podrez-5108648.jpg" alt="card image">
      <div class="container">
        <h4><b>Your vote matters</b></h4>
        <p></p>
      </div>
    </div>
    <div class="card" style="width:330px">
   
      <img src="./Images/pexels-rijan-hamidovic-2193268.jpg" alt="card image">
      <div class="container">
        <h4><b> Innovating the future</b></h4>
        <p></p>
      </div>
    </div>
  </section>


  <!--Footer conatins the bottom page description-->
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

  <!-The script tag is at the very bottom because its a good practic to keep it al the bottom. it makes it more easier to prase the DOM elements--->
    <script src="./JavaScript/script.js"></script>
    <!--This is the script towards the google translator api script file-->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
</body>

</html>