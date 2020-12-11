<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
<form>  
Enter First Number:  
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br>  
Enter Switch Case from (Add, Minus, Multiple or Default for Divide):
<input type="text" name="case" /><br><br>  
<input  type="submit" name="submit" value="Submit">  
</form>  
 </body>  
<?php      

@$number1=$_GET['number1'];   
@$number2=$_GET['number2'];
@$number3=$_GET['case'];

switch ($number3) {
    case "Add":
      echo "<b>"."The value of Add is : ".($number1+$number2);
      break;
    case "Minus":
      echo "<b>"."The value of Minus is : ".$number1-$number2;
      break;
    case "Multiply":
      echo "<b>"."The value of Multiply is : ".$number1*$number2;
      break;
    default:
      echo "<b>"."The value of divide is : ". $number1/$number2;
}
?>
</body>
</html>