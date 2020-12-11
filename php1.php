<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 //Using for loop
 for($i=200;$i<=250;$i++)
{
    if($i%5==0)
        echo "Number is ".$i."<br>";
}
echo "-----------------------"."<br>";

//Using Array function
$Var1= range(200,250,5);

foreach($Var1 as $Var1){
    echo "Number is ".$Var1."<br>";
}

?>
</body>
</html>