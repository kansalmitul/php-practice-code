<?php
$result='';

if (isset($_GET['Units'])) {
    $unit = $_GET['Units'];
    if (!empty($unit)) {
       $result = calculate_unit($unit);
	} 
}

function calculate_unit($unit) {
	if($unit <= 50) {
	  $sum=$unit*1.50;
	  $result = "Total cost is: $sum <br>";
	}
	else if($unit > 50 && $unit <=150) {
	  $val=$unit-50;
	  $sum=($val*2.0 + 50*1.5);
	  $result = "Total cost is: $sum <br>";
	}
	else if($unit>150 && $unit<=250) {
	  $val2=$unit-150;
	  $sum=(100*2.0 +$val2*4.5+ 50*1.5);
	  $result = "Total cost is: $sum";
	}
	else if($unit > 250) {
		$val3 = $unit-150;
		$sum=(100*2.0 +100*4.5+ 50*1.5+ $val3*7);
		$result = "<h2>Total cost is: $sum</h2>";
	}
	return $result;
}

?>

<html>
	<body>
		<div> 
			<h1>Electricity Bill</h1>
			<form>
			  <label>Enter the units consumed:</label>
			  <input type="text" id="units" name="Units"><br><br>
			  <input type="submit" value="Submit" id="sub">
			</form>
			<?php echo $result; ?>	
		</div>
	</body>
</html>