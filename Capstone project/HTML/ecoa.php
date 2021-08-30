<?php 
            session_start();
            $host="localhost"; // Host name
            $username="root"; // Mysql username
            $password=""; // Mysql password
            $db_name="ovsdb"; // Database name
            $tbl_name="vote"; // Table name
            // Connect to server and select databse.
            
            
            $conn = mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
                             // Attempt select query execution

                             $conn = mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
                             // Attempt select query execution
                             $sql1 = "SELECT * FROM vote";
                             $result1 = mysqli_query($conn, $sql1);
                  // display rows content
                if ($result1-> num_rows > 0) {
                        while ($row = $result1-> fetch_assoc()) {
                                echo "<tr><td>". $row["voteID"]."<tr><td>". $row["voteDate"]."<tr><td>". $row["candidateID"]."<tr><td>". $row["citizenID"]."</td></tr>";
                        }
                        echo "</table>";
                }
                else{
                echo "No information available";
                }
                    ?>
<!DOCTYPE html>
<html lang= "en">
<head>
<title>Ecoa</title>
</head>
<body>
 <!--table to display result count from db-->       
<table>
        <tr>
        <th>voteID</th>
        <th>voteDate</th>
        <th>candidateID</th>
        <th>citizenID</th>
        </tr>


</html>
