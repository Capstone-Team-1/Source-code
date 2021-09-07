<?php
include 'connection.php';
	session_start();

	if(isset($_SESSION['voter'])){
		 $session_id=$_SESSION['citizenID'];
		$user_query = $conn->query("SELECT * FROM citizen WHERE citizenID = '$session_id'");
		$user_row = $user_query->fetch_array();
		$user_username = $user_row['citizenFName']." ".$user_row['citizenLName'];
	}
	else{
		header('location: login.php');
		exit();
	}
    ?>