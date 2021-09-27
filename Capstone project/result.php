<?php
//from pdo documentation available in PHP
$dbhost = 'localhost';
$dbname = 'voting';
$dbuser = 'root';
$dbpass = '';
 //following the error handling apporach
try{
  $dbcon = new PDO ("mysql:host = {$dbhost};dbname={$dbname}", $dbuser, $dbpass);
  $dbcon -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
  die($ex-> getMessage());
}
//the variable underneath checks the details for candidate no 1
$result = $dbcon-> query("SELECT voteID FROM vote where candidateID= '1'");

// guessing a variable to store data
$dbdata = array();

//fetching the data in the associative empty array


  while ( $row = $result->fetch(PDO::FETCH_ASSOC))  {
	$dbdata[]=$row;
  }
//inorder to count the total times the particular candidate was voted 
  $countdbdata = count($dbdata);
 







  $resultTwo = $dbcon-> query("SELECT voteID FROM vote where candidateID= '2'");

// guessing a variable to store data
$dataTwo = array();

//fetching the data in the associative empty array


  while ( $row = $resultTwo->fetch(PDO::FETCH_ASSOC))  {
	$dataTwo[]=$row;
  }

  $countdataTwo = count($dataTwo);



    $resultThree = $dbcon-> query("SELECT voteID FROM vote where candidateID= '3'");

// guessing a variable to store data
$dataThree = array();

//fetching the data in the associative empty array


  while ( $row = $resultThree->fetch(PDO::FETCH_ASSOC))  {
	$dataThree[]=$row;
  }

  $countdataThree = count($dataThree);

  

// $stmt = $dbcon-> prepare("SELECT voteID FROM vote where candidateID=2");
// $stmt -> execute();
// // $json = [];
// $json2 = [];
// while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
//   extract($row);
//   // $json[]=$candidateID;
//  $json2[]= (int)$voteID; //set this according to candidate name or AS REQURIED int if its the vote count

// json_encode($json);
//  echo json_encode(count($json2));


include 'connection.php';
session_start();


if(empty($_SESSION['employeeID']))
 {
        header("Location:adminLogin.php");
    }


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



     .user-display{
    margin-top: 80px;
  
}
table {
  text-align: center;
  display: inline-block;
  font-size: 1.2rem;
  

}

th, td {
  text-align: left;
  padding: 30px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {background-color: #D6EEEE;}
  
</style>
    
<!-- The underneath link is for piechart -->
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Vote', 'Count'],
          ['Scott Morrison',    <?php echo $countdbdata;?> ],
          ['Malcom Turnbull',      <?php echo $countdataTwo ?>],
          ['Anthony Alabanese',  <?php echo$countdataThree;?>]
        ]);

        var options = {
          title: 'Vote Leaderboard',
          pieHole: 0.9,
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
<!-- the underneath link is for barchart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Vote', 'Percentage'],
          ['Scott Morrison',    <?php echo $countdbdata;?> ],
          ['Malcom Turnbull',      <?php echo $countdataTwo ?>],
          ['Anthony Alabanese',  <?php echo$countdataThree;?>]
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Voters leaderboard',
            subtitle: 'Lead by vote count' },
          axes: {
            x: {
              0: { side: 'top', label: 'Vote counts'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
     


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
        <li><a href="./voterList.php">Voters List</a></li>
        <li><a href="./eycandidateRegister.php">Candidate Register</a></li>
        <li><a href="./result.php">Elections Resutls</a></li>
        <li><a href="./logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class = "user-name" style="position:absolute; bottom: 44%; left: 88% ; font-size: 1.3rem; color:purple;">         <?php  echo $_SESSION['employeeFirstName']. " ". $_SESSION['employeeLastName'] ?>
    </header>

    <section class="banner">
     
            <div class="banner-container">
              <div class="banner-items" >
                <h2 class="banner-header">
                    <br> Welcome  Back <?php  echo $_SESSION['employeeFirstName']. " ". $_SESSION['employeeLastName'] ?>
                    <br>Results 
                </h2>
               
                    </div>
        </div>
</section>
   <section class="user-display" >
          <h3 style="color:black;"> Total Votes</h3>
          <!-- <table style="border:1px solid black; ">
            <tr style="width:300px;"> 
<th> Vote ID </th>
<th> Voters Name</th>





<tbody id="dataSource"> <!----This will fetch data using ajax---->

</tbody>

            </tr> 

          </table>
          <br>
<?php $candidateOne = $dbcon->prepare("SELECT count(voteID) FROM vote where candidateID = '1'");
	$candidateOne->execute();
			for($i=0; $rows = $candidateOne->fetch(); $i++){
			echo " Mr. Scott Morrission received = ".$rows['count(voteID)'] ."<br/>" ;
			}
   
     
      $candidateTwo = $dbcon->prepare("SELECT count(voteID) FROM vote where candidateID = '2'");
			$candidateTwo->execute();
			for($i=0; $rows = $candidateTwo->fetch(); $i++){
			echo "Mr. Malcom Turnbull received  = ".$rows['count(voteID)'] ."<br/>";
			} 
   

      $candidateThree = $dbcon->prepare("SELECT count(voteID) FROM vote where candidateID = '3'");
			$candidateThree->execute();
			for($i=0; $rows = $candidateThree->fetch(); $i++){
			echo "Mr. Albanase Anthony received  = ".$rows['count(voteID)']."<br/>";
			} ?>

        </section>


<section class="reading-content">
   <div id="piechart_3d" style="width: 1100px; height: 600px; display:inline-block; position:relative; z-index:-999;"></div>
  <div id="top_x_div" style="width: 800px; height: 600px; display:inline-block; position:relative; z-index:-999;">"></div>

   <div style="margin-top: 60px;">
<?php
			
	$candidateOne = $dbcon->prepare("SELECT count(voteID) FROM vote where candidateID = '1'");
			$candidateOne->execute();
			for($i=0; $rows = $candidateOne->fetch(); $i++){
			echo " Mr. Scott Morrission received = ".$rows['count(voteID)']. " votes". "<br>";
			} //for loop to iterate until possible and to all values available
      
      $candidateTwo = $dbcon->prepare("SELECT count(voteID) FROM vote where candidateID = '2'");
			$candidateTwo->execute();
			for($i=0; $rows = $candidateTwo->fetch(); $i++){
			echo "Mr. Malcom Turnbull  = ".$rows['count(voteID)']. " votes"."<br>";
			}

      $candidateThree = $dbcon->prepare("SELECT count(voteID) FROM vote where candidateID = '3'");
			$candidateThree->execute();
			for($i=0; $rows = $candidateThree->fetch(); $i++){
			echo "Mr. Albanase Anthony  = ".$rows['count(voteID)']. " votes"."<br>" . "<br>";
			}
      $results = $dbcon->prepare("SELECT count(voteID) FROM vote");
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
			echo "The total number of vote received = ".$rows['count(voteID)']. " votes"."<br>";
			}
    

			?>
</div>
 
</section>

<footer style="margin-top:60px;">

<div class="footer-banner" style="text-align: justify; " >
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
    



<script src="../JavaScript/script.js"></script>
  <!--This is the script towards the google translator api script file-->
    <script type="text/javascript" 
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<script src="./JavaScript/result.js">
 
</script>
</body>
</html>