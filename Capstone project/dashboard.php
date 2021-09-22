<?php 
include 'connection.php'; //including the connection file to connect to database
session_start(); //recording and checking the logged in session


if(empty($_SESSION['employeeID'])) //checking if authorised user has logged in
 {
        header("Location:index.php"); //if inavlid user tries to access the dashboard page then the header is towards the index page
    }

?>

<!-- Admin dashborad this requires minimal changes please feel free to tweak as you desire -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./CSS/style.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
    <style>
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
  padding: 8px;
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
        <li><a href="./voterList.php">Voters List</a></li>
        <li><a href="./eycandidateRegister.php">Candidate Register</a></li>
        <li><a href="./result.php">Election Resutls</a></li>
        <li><a href="./logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class = "user-name" style="position:absolute; bottom: 44%; left: 88% ; font-size: 1.3rem; color:purple;">     <?php  echo $_SESSION['employeeFirstName']. " ". $_SESSION['employeeLastName'] ?>
    </header>

    <section class="banner">
     
            <div class="banner-container">
              <div class="banner-items" >
                <h2 class="banner-header">
                    <br> Welcome  Back <?php  echo $_SESSION['employeeFirstName']. " ". $_SESSION['employeeLastName'] ?>
                    <br>The list of users  and candidate available
                </h2>
               
                    </div>
        </div>


    </section>
        <!--Start from here-->
<!-- This section displays the available user data in a table -->
        <section class="user-display">
          <h3 style="color:black;"> User List</h3>
          <table style="border:1px solid black;">
            <tr> 
<th> Citizen ID </th>
<th>First Name</th>
<th> Last Name </th>
<th>  Phone</th>
<th> Date of Birth</th>
<th> Email</th>
<th> Address</th>
<th> state</th>
<th> City </th>
<th> Zip </th>

<tbody id="dataSource"> <!---This will fetch data using ajax---->

</tbody>

            </tr>

          </table>

        </section>








        <footer style="margin-top: 140px;">
    <div class="footer-details" >
      <h3>Election Comission of Australia</h3>
      <p>The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>


      <div class="footer-container" style="margin-top: 50px;">
        <div class="footer-item"> <a href="./dashboard.php">Dashboard</a></div>
        <div class="footer-item"> <a href="./votersList.php">Voters List</a></div>
        <div class="footer-item"> <a href="./eycandidateRegister.php">Candidate Register</a></div>
        <div class="footer-item"> <a href="./electionsResults.php">Election Results</a></div>
        <div class="footer-item"> <a href="./logout.php">Logout</a></div>
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

<script>
  var ajax = new XMLHttpRequest();
var method = "GET";
var url = "./data.php"
var asynchronous = true;

ajax.open(method, url, asynchronous);
//This is how we are sending request
ajax.send();
//This is rweceviing request from our data.php file refer to that file if you would like to understand how we are fetching data
// You can use Fetch API rather than XML request. Refer to FETCH API documentation and use the concept of promises while you work on them
ajax.onreadystatechange = function (){
   if (this.readyState == 4 && this.status == 200) {
       //converting JSON back to array

       var data = JSON.parse (this.responseText);
       console.log(data); //for test

       //html value for table body i.e. tbody

       var html = "";
       // we have to loop the data through
       for(var a = 0; a<data.length; a++){
           var id = data[a].citizenID;
           var firstName = data[a].citizenFName;
           var lastName = data[a].citizenLName;
           var phone = data[a].citizenPhone;
           var dob= data[a].citizenDOB;
           var email = data[a].citizenEmail;
           var address = data[a].citizenAddress;
           var City= data[a].citizenCity;
           var state = data[a].citizenState;
           var zip = data[a].citizenZip;

           //appending in HTML dom

           html+= "<tr> "
          html += "<td>" + id + "</td>";
            html += "<td>" + firstName + "</td>";
              html += "<td>" + lastName + "</td>";
                html += "<td>" +phone + "</td>";
                  html += "<td>" + dob+ "</td>";
                    html += "<td>" + email + "</td>";
                      html += "<td>" + address + "</td>";
                        html += "<td>" + City + "</td>";
                          html += "<td>" + state + "</td>";
                        html += "<td>" + zip+ "</td>";

          html += "</tr>";
       }
//replacing the table body
document.getElementById('dataSource').innerHTML = html;
   }
}
</script>
  <!--This is the script towards the google translator api script file-->
    <script type="text/javascript" 
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

</body>
</html>