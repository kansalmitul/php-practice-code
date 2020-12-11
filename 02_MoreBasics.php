<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<body>
    <div class="container">
    <?php
    $var009= 898;
    if ($var009<87){
        echo "You can go to the party.";
    }
    else{
        echo "You cannot go to the party.";
    }



    // How to write Arrays in PHP
    echo "<br>";
    $Array_var1=array("Python","Php","Java");
    Echo $Array_var1[0];    echo "<br>";

    Echo $Array_var1[1];    echo "<br>";

    Echo $Array_var1[2];    echo "<br>";


//Array methods

    echo count($Array_var1);
//Loops
//While Loops
$ab=1;
while ($ab <= 10) {
    # code...
    echo "the value of ab is :";
    echo $ab;
    $ab++;
    echo "<br>";
}
//Do While Loops
echo "<br>";

 do {
    # code...
    echo "the value of ab is :";
    echo $ab;
    $ab++;
    echo "<br>";
} while ($ab <= 10);
echo "<br>";

//'For' Loops
for ($a4=0; $a4<10; $a4++) { 
    # code...
echo "Print for loop :";
echo $a4;
echo "<br>";
}
//For each Loop

    foreach ($Array_var1 as $value){
        echo "<br>The value from foreach loop is ";
        echo $value;
    }
//How to define custom functions in PHP
function print5(){
    echo "Five";
}

function print_number($number){
    echo "<br> Your number is :";
    echo $number;
    }

    print_number(98);
    print_number(98098);
    print_number(78);
    print_number(6548);


    ?>
    
    </div>
</body>
</html>