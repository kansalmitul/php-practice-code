<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "newdb";


$conn = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * from newtable";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

echo '<pre>'; print_r($row);

if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) {
           echo "The name is :" . $row["emp_name"]."<br>";
             }
    } else {
    echo "0 results";
}
$mysqli->close(); 
?> 