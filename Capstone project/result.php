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

// $result = $dbcon-> query("SELECT voteID FROM vote where candidateID= '1'");

// // guessing a variable to store data
// $dbdata = array();

// //fetching the data in the associative empty array


//   while ( $row = $result->fetch(PDO::FETCH_ASSOC))  {
// 	$dbdata[]=$row;
//   }
//   echo json_encode($dbdata);

$stmt = $dbcon-> prepare("SELECT voteID FROM vote where candidateID=2");
$stmt -> execute();
// $json = [];
$json2 = [];
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  extract($row);
  // $json[]=$candidateID;
 $json2[]= (int)$voteID; //set this according to candidate name or AS REQURIED int if its the vote count
}
// json_encode($json);
 echo json_encode(count($json2));


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
    <div class = "user-name" style="position:absolute; bottom: 44%; left: 88% ; font-size: 1.3rem; color:purple;">         <?php  echo $_SESSION['employeeFirstName']. " ". $_SESSION['employeeLastName'] ?>
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
   <section class="user-display" >
          <h3 style="color:black;"> Total Votes</h3>
          <table style="border:1px solid black; ">
            <tr style="width:300px;"> 
<th> Vote ID </th>
<th> Voters Name</th>





<tbody id="dataSource"> <!---This will fetch data using ajax---->

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
			echo "Mr. Joyce Barnaby received  = ".$rows['count(voteID)'] ."<br/>";
			} 
   

      $candidateThree = $dbcon->prepare("SELECT count(voteID) FROM vote where candidateID = '3'");
			$candidateThree->execute();
			for($i=0; $rows = $candidateThree->fetch(); $i++){
			echo "Mr. Albanase Anthony received  = ".$rows['count(voteID)']."<br/>";
			} ?>

        </section>


<section class="reading-content">
<div class="chart">  
  <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Scott Morrission',  'Joyce Barnaby', 'Anthony Albanese'],
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
			$results = $dbcon->prepare("SELECT count(voteID) FROM vote");
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
			echo "The total number of vote counts = ".$rows['count(voteID)'];
			}
    
	$candidateOne = $dbcon->prepare("SELECT count(voteID) FROM vote where candidateID = '1'");
			$candidateOne->execute();
			for($i=0; $rows = $candidateOne->fetch(); $i++){
			echo " Mr. Scott Morrission received = ".$rows['count(voteID)'];
			}
      
      $candidateTwo = $dbcon->prepare("SELECT count(voteID) FROM vote where candidateID = '2'");
			$candidateTwo->execute();
			for($i=0; $rows = $candidateTwo->fetch(); $i++){
			echo "Mr. Joyce Barnaby   = ".$rows['count(voteID)'];
			}

      $candidateThree = $dbcon->prepare("SELECT count(voteID) FROM vote where candidateID = '3'");
			$candidateThree->execute();
			for($i=0; $rows = $candidateThree->fetch(); $i++){
			echo "Mr. Albanase Anthony  = ".$rows['count(voteID)'];
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
<script>
  var ajax = new XMLHttpRequest();
var method = "GET";
var url = "./votedata.php"
var asynchronous = true;

ajax.open(method, url, asynchronous);
//This is how we are sending request
ajax.send();
//This is rweceviing request from our data.php file
ajax.onreadystatechange = function (){
   if (this.readyState == 4 && this.status == 200) {
       //converting JSON back to array

       var data = JSON.parse (this.responseText);
       console.log(data); //for test

       //html value for table body i.e. tbody

       var html = "";
       // we have to loop the data through
       for(var a = 0; a<data.length; a++){
           var id = data[a].voteID;
          //  var firstName = data[a].voteDate;
           var candidateID = data[a].candidateID;
           

           //appending in HTML dom
if(candidateID == 1){
  candidateID = " Scott Morrission";
}

else if(candidateID == 2){
  candidateID = " Joyce Barnaby";
  
}
else{
  candidateID+=" Anthony Albanese";
}
           html+= "<tr> "
          html += "<td>" + id+ "</td>";
            // html += "<td>" + firstName + "</td>";
              html += "<td>" + candidateID+ "</td>";
                

          html += "</tr>";
       }
//replacing the table body
document.getElementById('dataSource').innerHTML = html;
   }
}
</script>
</body>
</html>