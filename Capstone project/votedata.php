 <?php
include 'connection.php';

$result = mysqli_query($conn,"SELECT * FROM vote" );

$data = array();
while ($row = mysqli_fetch_assoc($result)){

    $data[]= $row;
}

echo json_encode($data);
?>
