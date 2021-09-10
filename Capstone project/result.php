<?php
//from pdo documentation available in PHP
$dbhost = 'localhost';
$dbname = 'voting';
$dbuser = 'root';
$dbpass = '';

try{
  $dbcon = new PDO ("mysql:host = {$dbhost};dbname={$dbname}", $dbuser, $dbpass);
  $dbcon -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
  die($ex-> getMessage());
}
$stmt = $dbcon-> prepare("SELECT * FROM vote");
$stmt -> execute();
$json = [];
$json2 = [];
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  extract($row);
  $json[]=$candidateID;
 $json2[]= (int)$voteID; //set this according to candidate name or AS REQURIED int if its the vote count
}
json_encode($json);
 json_encode($json2);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="./CSS/style.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.chart{
    height: 760px;
    width: 760px;
    display: inline-block;
    margin: 100px 0;
}
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
        <li><a href="./dashboard.php">Dashboard</a></li>
        <li><a href="./votersAdminpage.php">Voters List</a></li>
        <li><a href="./eycandidateRegister.php">Candidate Register</a></li>
        <li><a href="./result.php">Elections Resutls</a></li>
        <li><a href="./logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class = "user-name" style="position:absolute; bottom: 44%; left: 88% ; font-size: 1.3rem; color:purple;">         <?php  echo $_SESSION['citizenFName']. " ". $_SESSION['citizenLName'] ?>
    </header>

    <section class="banner">
     
            <div class="banner-container">
              <div class="banner-items" >
                <h2 class="banner-header">
                    <br> Welcome to ECOA online voting platform
                    <br>Information Center
                </h2>
               
                    </div>
        </div>
</section>

<section class="reading-content">
<div class="chart">  
  <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Scott Morrission',  'Joyce Barnaby', 'Anthony Albanes'],
        datasets: [{
            label: '# of Votes',
            data: <?php echo json_encode($json2) ?>,
            backgroundColor: [
                  'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
            ],
            borderColor: [
                  'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
            ],
               hoverOffset: 4,
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
<?php
			$results = $dbcon->prepare("SELECT sum(voteID) FROM vote");
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
			echo "The total number of vote counts = ".$rows['sum(voteID)'];
			}
			?>
</div>
 
</section>

<footer>

<div class="footer-banner" style="text-align: justify"; >
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

                    <div class="footxer-link-one">   <a href="https://www.facebook.com/pages/AEC%20-%20Australian%20Electoral%20Commission/122364357847301/"> <ion-icon name="logo-facebook"></ion-icon></a>  </div>
                    <div class="footxer-link-two">   <a href="https://twitter.com/auselectoralcom"> <ion-icon name="logo-twitter"></ion-icon></a>   </div>
                      <div class="fooxter-link-three">   <a href="https://www.facebook.com/pages/AEC%20-%20Australian%20Electoral%20Commission/122364357847301/"> <ion-icon name="logo-instagram"></ion-icon></a>  </div>
                       
                </div> 
         




</div>

       
 </footer>
    



<script src="../JavaScript/script.js"></script>
  <!--This is the script towards the google translator api script file-->
    <script type="text/javascript" 
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

</body>
</html>