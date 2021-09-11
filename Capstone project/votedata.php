 <?php
include 'connection.php';

$result = mysqli_query($conn,"SELECT * FROM vote" );

$data = array();
while ($row = mysqli_fetch_assoc($result)){

    $data[]= $row;
}

echo json_encode($data);

//$result = $dbcon-> query("SELECT voteID FROM vote where candidateID=1");

//guessing a variable to store data
// $dbdata = array();

// //fetching the data in the associative empty array


//   while ( $row = $result->fetch(PDO::FETCH_ASSOC))  {
// 	$dbdata[]=$row;
//   }
//   echo json_encode($dbdata);
?>


