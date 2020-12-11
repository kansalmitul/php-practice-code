<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees List</title>
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "", "newdb"); 
  
if ($mysqli == false) { 
    die("ERROR: Could not connect. " 
                          .$mysqli->connect_error); 
} else {
	$query = "SELECT * FROM newtable";
	$result = mysqli_query($mysqli, $query);

	$html = "<table border=1>";
	$html .= "<tr><th>Name</th></tr>";
	
	while($users = mysqli_fetch_assoc($result)){
		if(isset($users) && count($users) > 0 ) {
			if(!empty($users['emp_id']))
				$html .= "<tr>";
				$html .= "<td><a href='employee.php/?id=".$users['emp_id']."'>" . $users['emp_name'] . "</td>";
				$html .= "</tr>";
			} 
		else {
			$html .= "<tr><td>No Results to display</td></tr>";
		}
	}
	$html .= "</table>";

	echo $html;
}
$mysqli->close(); 
?>
</body>
</html>