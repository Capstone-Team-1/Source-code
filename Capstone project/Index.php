<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Election Commission of Australlia</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>


<body>


 <!--The script tag contains location to fetch icons-->
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<!--Header contains nav and heading following the semantic tags from HTML5--->
   <header>
  


    <a href="./Index.php"> <img src="./Images/Citizens Electoral.jfif" alt="" class="logo"></a>
        <h1 class="first">Election Commission of  Australia</h1>
        <!--The first div is for mobile menu which will trigger height equivalent to the size of the menu items once button is clicked-->
        <div class="sticky-mobile-nav" ><ion-icon name="menu"></ion-icon></div>
     
       <!--Container class contains all the nav menu and it is set to flex--->
 <div class= "container">        
<div class="item one">
  <div class= "dropdown"> For Voters
       <div class="dropdown-content">
           <a href="./HTML/login.php">Voter Login</a>
           <a href="./HTML/register.php"> Registration</a>
              </div>
</div>
                </div>
              <div class="item two">For candidates </div>
               <div class="item three"> About election </div>
                <div class="item four"> Information Centre</div>
                 <div class="item five ">  <a href="./HTML/admin.php"> ECOA</a> </div>
               
        </div>
        </div> 
    </header>

    <!--Section class contains all our main content present in the body as per name specified by the class--->

    <section class="banner">
 
            <div class="banner-container">
             <div class="banner-image"> </div>
              <div class="banner-items" > </div>
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

    </section>

    <div class="reading-content">
   


<h3>What's Happening?</h3>
<section>
    <p>The website is under construction and will be live to be used on 7th of october 2021
        <br>
      <Strong>  Please  stay updated, we will be updating any privacy related information to you via the information that we have available
   </strong> </p>




   <div class="main-article">
      <h3 style="color: #009cde;">WELCOME
Welcome to our corporate plan
Welcome to the Australian Electoral Commission (AEC) 2020–21 Corporate Plan, which sets our strategic direction for the next four years.</h3> 
 <p style="font-size: 1.3rem; text-align: justify;">
Challenges to the successful administration of electoral events continue to multiply with a number of unprecedented local and world events, most notably the COVID-19 pandemic. As a result, electoral administration continues to be an increasingly complex endeavour, and I’m conscious our commitment to improvement and innovation—and our values of professionalism, agility, quality and electoral integrity—have never been more important.

To remain agile—now and into the future—we must continue refining our election delivery model through our lessons management approach. <br> <br>  We will continue to evolve our planning processes, address the delivery of electoral events in a pandemic, and improve our delivery model for future electoral cycles.

Elections are Australia’s largest and most complex single peacetime event. This fact is masked by the electoral administrator’s conundrum: the better and more efficient the election, the simpler the event appears to voters, candidates and political parties, most of who only interact with the voting process episodically and for a few brief <br> <br>
 There are a large number of logistically complicated and legislatively complex steps required to deliver elections successfully, including satisfying rapidly evolving community expectations. Our modernisation journey must consider these expectations as well as the realities of our funding, the availability and cost of technology, legislation and the ever-increasing threat of disinformation and cyber security. To continue to safeguard our democracy we must further mature our regulatory capability and work proactively with our stakeholders to solve these multidimensional problems.

The modernisation of our two main election systems remains critical to ensure these can respond to future changes in legislation and our rapidly changing external environment.
<br><br> Investing in training for our permanent employees and large temporary election workforce remains a priority, as stated in our recently launched learning and development strategy.

This year, we have further refined our performance framework. We have re-focused the six agency directions in last year’s corporate plan to four key activities. These enable us to deliver our purpose and ensure an efficient, effective and secure electoral system for Australia. Our corporate plan continues to guide our agency and is an integral part of our performance and reporting framework.

Tom Rogers
Electoral Commissioner

Compliance statement</p>
   </div>
</section>



    </div>

    <!--Footer conatins the bottom page description-->
 <footer>

<div class="footer-banner" >
   

<div class= "footer-details">
     <h3 style="color: azure; font-size: 1.8rem; font-weight: 550px;">Election Comission of Australia</h3>
     <p style="font-family: 'Dancing Script', cursive; font-size: 1.4em;">The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>


     <div class= "footer-container" style="margin-top: 50px;"> 
             <div class="footer-item one"> For Voters</div>
              <div class="footer-item two">For candidates </div>
               <div class="footer-item three"> About election </div>
                <div class="footer-item four"> Information Centre</div>
                 <div class ="footer-item five "> The ECOA </div>
                  </div>




</div>
<!--This div in particular contains links to various platforms and is set to flex-->
       <div class="footer-link">

                    <div class="footxer-link-one">   <ion-icon name="logo-facebook"></ion-icon></div>
                    <div class="footxer-link-two"> <ion-icon name="logo-twitter"></ion-icon></div>
                      <div class="fooxter-link-three"> <ion-icon name="logo-instagram"></ion-icon></div>
                       
                </div> 
         




</div>

       
 </footer>

 <!-The script tag is at the very bottom because its a good practic to keep it al the bottom. it makes it more easier to prase the DOM elements--->
    <script src="./JavaScript/script.js"></script>
</body>
</html>