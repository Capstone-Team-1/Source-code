<?php 
session_start();
include 'connection.php';


if(empty($_SESSION['citizenID']))
 {
        header("Location:voterLogin.php");
    }




   if(isset($_POST['submit_vote']))
        {
            $candidate_id = $_POST['candidate_id'];
            $voter_id = $_POST['voter_id'];
            
            $insert_vote = "INSERT INTO vote ( voteDate, candidateID, citizenID) VALUES (now(), '2'. '200574')";
            $insert_vote_result = mysqli_query($conn, $insert_vote);
            if($insert_vote_result==1)
            {
                echo '<script>alert("Voted Successfully")</script>';
                echo '<script>';
                echo 'window.location="'.$base_url.'logout.php"';
                echo '</script>';
            }
            else
            {
                echo '<script>alert("Failed to Vote")</script>';
            }
        }










?>


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

        <form action="" method="post">
      <div class="modal-body" id="popup">
            <p>Are you sure you want to give vote to this candidate?</p>
            <p>This action is irreversible.</p>
            <p>Once you click '<b>Yes</b>', you cannot change your vote.</p>
            
                        <input type="hidden" name="candidate_id" id="candidate_id">
                        <input type="hidden" name="voter_id" id="voter_id">
   
            <button type="button" class="btnNo">No</button>
            <button type="submit" name="submit_vote" class="submit">Yes</button>
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

    <section class="banner">
     
            <div class="banner-container">
              <div class="banner-items" >
                <!---This h2 will display the user name as per the session --->
                <h2 class="banner-header">

                    <br> Welcome <?php  echo $_SESSION['citizenFName']. " ". $_SESSION['citizenLName'] ?>
                    <br>Please choose in your Candidate to continue!!!
                </h2>
               
                    </div>
        </div>

      
    </section>

      


 <section  class="card-container">
<h3 style="margin-top: 30px; text-decoration: underline; "> Candidates for Election 2021 </h3>
 <form action="action.php" method="POST">


<div class="card">
  <img src="./Images/malcolm-turnbull.jpg" alt="image " style="width: 336px;" >
  <div class="container">
    <h4><b>Malcom Turnbull: National Party of Australia</b></h4> 
     <input type="button" name="buttonOne" class="buttonOne"value="Vote"></input>
  </div>
 


</div>   


<div class="card">
  <img src="./Images/Albanese_Anthony_170140-11__FillWzMwMCwzODBd.jpg" alt="card image"  >
  <div class="container">
    <h4><b>Anthony Albanese: Australian Labor Party</b></h4> 
  </div>
  <input type="button" name="buttonTwo" class="buttonTwo" value="Vote" ></input>
</div>  


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




<div class="footer-banner" >
    <h3 style="color: azure; font-size: 1.1em; font-weight: 550px;">Election comission of Australia</h1>

<div class= "footer-details">
    <p style="font-family: 'Poppins', sans-serif; font-size: 1.1em;">The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>


     <div class= "footer-container" style="margin-top: 50px;"> 
             <div class="footer-item one"> Homepage</div>
              <div class="footer-item two">For candidates </div>
               <div class="footer-item three"> About election </div>
                <div class="footer-item four"> Information Centre</div>
                 <div class ="footer-item five "> The ECOA </div>
                  </div>




</div>

       <div class="footer-link">

                    <div class="footxer-link-one">   <ion-icon name="logo-facebook"></ion-icon></div>
                    <div class="footxer-link-two"> <ion-icon name="logo-twitter"></ion-icon></div>
                      <div class="fooxter-link-three"> <ion-icon name="logo-instagram"></ion-icon></div>
                       
                </div> 
         




</div>

       
 </footer>
    

</div>

<script src="../JavaScript/script.js"></script>
  <!--This is the script towards the google translator api script file-->
    <script type="text/javascript" 
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<script >

  const btnOne = document.querySelector('.buttonOne');
  const btnTwo = document.querySelector('.buttonTwo');
  const btnThree = document.querySelector('.buttonThree');
  const b = document.querySelector('#popup');
  const c = document.querySelector('.btnNo');
  const d = document.querySelector('.blur');

btnOne.addEventListener('click', ()=>{
b.classList.add('modal-body-click');
d.classList.add('bg-blur');

})
btnTwo.addEventListener('click', ()=>{
b.classList.add('modal-body-click');
d.classList.add('bg-blur');

})
btnThree.addEventListener('click', ()=>{
b.classList.add('modal-body-click');
d.classList.add('bg-blur');

})





c.addEventListener('click', ()=>{
  b.classList.remove('modal-body-click');
  d.classList.remove('bg-blur');
})

</script>
   

</body>
</html>