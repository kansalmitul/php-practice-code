
<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';

if (is_numeric($first_num) && is_numeric($second_num)) {
switch ($operator) {
	case "Add":
	$result = $first_num + $second_num;
	break;
	case "Subtract":
	$result = $first_num - $second_num;
	break;
	case "Multiply":
	$result = $first_num * $second_num;
	break;
	case "Divide":
	$result = $first_num / $second_num;
	}
}

?>
<html>
	<body>
		<div>
			<h1>Calculator Program</h1>
				<form action="" method="post" id="form1">
					<br><b><label for="name">First num:</label>
					<input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /></b> </br>
					<br><b><label for="name">Second num:</label>
					<input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /></b> </br>

						<br><b><label for="name">Result:</label>
						<input readonly="readonly" name="result" value="<?php echo $result; ?>"></b></br>

						<br><b> <input type="submit" name="operator" value="Add" />
						<input type="submit" name="operator" value="Subtract" />
						<input type="submit" name="operator" value="Multiply" />
						<input type="submit" name="operator" value="Divide" /> </b></br>
				<form>

		</div>
	</body>
</html>