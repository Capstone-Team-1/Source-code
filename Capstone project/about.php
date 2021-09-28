<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="./CSS/style.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
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
              <div class="banner-items" >
                <h2 class="banner-header">
                    <br> Contact Us Page
                    <br>Information Center
                </h2>
               
                    </div>
        </div>
</section>

<section class="reading-content">
  <div class="about">
    <div class="aboutH1">
Australia is a representative democracy in which it is compulsory for all Australians over 18 years of age to enrol and vote for people to represent them.
    </div>
There are three levels of government in Australia, and we vote to elect representatives to each of these levels: federal, state or territory and local.
</br>
Poster: The three levels of Government
</br>
</br>
</br>
<h1>Federal government</h1>
</br>
The decision-making body of the federal government is Federal Parliament, which consists of two houses – the House of Representatives and the Senate.
People elected to the House of Representatives each represent a separate division or electorate in Australia. The leader of the federal government is called the Prime Minister. This is a person who has been elected (by their fellow party members) as the leader of the party that has won the majority of members elected to the House of Representatives. 
</br>
When is a federal election held?
How is federal Government formed?
The Senate is also often referred to as the ‘state’s house’ or the ‘house of review’ and plays a joint role with the House of Representatives in reviewing, debating and voting on proposed laws. Representatives elected to the Senate are called senators. They represent a whole state or territory - there are 12 senators for every state and two senators for each territory.
</br>
Federal government responsibilities include: foreign affairs, social security, industrial relations, trade, immigration, currency, defence.
</br></br></br>
<h1>State and territory government</h1>
</br>
The decision-making body of state government is the state parliament which meets in the Parliament House of the particular state. Each state parliament, except for the Queensland Parliament, is made up of two houses.

Representatives elected to state parliaments are generally known as 'Members' – Members of the Legislative Assembly (MLA) or Members of the House of Assembly (MHA) or Members of the Legislative Council (MLC). The leader of a state government is called the Premier.

The Northern Territory and the Australian Capital Territory have a different arrangement. Each territory parliament has one house called the Legislative Assembly. The leader of each territory government is called the Chief Minister.

State and territory government responsibilities include: justice, consumer affairs, health, education, forestry, public transport, main roads.

</br></br></br>
<h1>Local government</h1>
</br>
The decision-making body of local government is usually called the city council or shire council. Councils are established by state governments to look after the particular needs of a city or local community.

The people's representatives who form the Council are called aldermen or councillors. The head of the Council is the Mayor or Shire President.

Local government responsibilities include: local road maintenance, garbage collection, building regulations and land subdivisions, public health and recreation facilities such as swimming pools.

</div>

</section>

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

<script src="./JavaScript/script.js"></script>
  <!--This is the script towards the google translator api script file-->
    <script type="text/javascript" 
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

</body>
</html>