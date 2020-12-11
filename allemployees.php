<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "", "newdb"); 
  
if ($mysqli == false) { 
    die("ERROR: Could not connect. " 
                          .$mysqli->connect_error); 
} 
echo "Connection Successful"."<br>";

$query = "select * from newtable";

$result = mysqli_query($mysqli,$query);

//$row = mysqli_fetch_array($result);
$row = mysqli_fetch_assoc($result);
// echo(implode ('<br>',$row))."<br>";
print_r($row); exit;
foreach ($row as $employe) {
    echo '<pre>'; print_r($employe);
} exit;
if ($result->num_rows > 1) {
// output data of each row
     while($row = $result->fetch_assoc()) {
         //var_dump($row['emp_id']); exit;
//echo "<a href='next.php/$row[emp_id]'>".$row["emp_name"]."<br>";
print "<a href='next.php/?id=".$row["emp_id"].">".$row["emp_name"]."</a>"; 
         } 
} else {
echo "0 results";
}
$mysqli->close(); 
?>
</body>
</html>