<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$emp_id = $_GET['id'];
//echo $emp_id;

$mysqli = new mysqli("localhost", "root", "", "newdb"); 
if ($mysqli == false) { 
    die("ERROR: Could not connect. " 
                          .$mysqli->connect_error); 
} else {
    // $html = "<table>";
    // $html .= "<tr><th>EMP ID</th></tr>";
    // $html .= "<tr><th>EMP Name</th></tr>";
    // $html .= "<tr><th>Gender</th></tr>";
    // $html .= "<tr><th>Location</th></tr>";
    // $html .= "<tr><th>Salary</th></tr>";
    // $html .= "<tr><th>DOB</th></tr>";
    // $html .= "<tr><th>DOJ</th></tr>";
    // $html .= "</table>";
    // echo $html;

   
    
    $query = "select * from newtable where emp_id=".$emp_id;
    $result = mysqli_query($mysqli, $query); 
    echo "<table border='1'>
    <tr> 
    <th>Emp Id</th>
    <th>name</th>
    <th>Gender</th>
    <th>Location</th>
    <th>Salary</th>
    <th>DOB</th>
    <th>DOJ</th>
    </tr>";
    
    $row = mysqli_fetch_assoc($result);
    echo "<table>"."<tr>"."<td>".(implode (' ',$row))."</td>"."</tr>"."</table>";
    

}
$mysqli->close();
?>
</body>
</html>