<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <div class="container">
    
    This is my first PHP whesite.

<!--How to use PHP within HTML-->
    <?php

    define('PI', 3.14); //This is a way to define a constant in PHP
        echo "This is written using PHP";
    
        // This is a comment. Single line comment
    /*
    Multi Line comment
    */

    //Variables

    $variable1 = 1;
    $variable2 = 2;
    echo "----------------------";

    $variable1 +=1;
    echo $variable1; 
    echo "----------------------";
    echo $variable1;
    Echo $variable2;

    echo $variable1 + $variable2;
    echo "<br>";

    //Operators in PHP
    // Arithmetic Operators
    echo "the value of var1 and var2 is "; 
    echo "<br>";
    echo "79";
    echo "<br>";
    echo $variable1 + $variable2;
    echo "<br>";
    echo $variable1 - $variable2;
    echo "<br>";
    echo $variable1 * $variable2;
    echo "<br>";
    echo $variable1 / $variable2;
    echo "<br>";

    // Assignment Operators
    $var3= TRUE;
    echo $var3;
       
    //How to use HTML tags within PHP
    echo "<br>";
    echo "<b>This is a HTML tag with PHP<b>";
    echo "<br>";


    // Comparison Operators
    echo "The value of 1==9 is ";
    echo var_dump(1==9);
    echo "<br>";
    
    echo "The value of 1>=9 is ";
    echo var_dump(1>=9);
    echo "<br>";
    
    echo "The value of 1<=9 is ";
    echo var_dump(1<=9);
    echo "<br>";
    
    echo "The value of 1!=9 is ";
    echo var_dump(1!=9);
    echo "<br>";
    
    // Increment/Decrement Operators
   echo $variable1++;
   echo "<br>";
   echo $variable1;
   echo "<br>";

   echo $variable2--;
   echo "<br>";
   echo $variable2;
   echo "<br>";


   echo ++$variable1;
   echo "<br>";
   echo $variable1;
   echo "<br>";

   echo --$variable2;
   echo "<br>";
   echo $variable2;
   echo "<br>";

    // Logical Operators

    // and (&&)
    // or (||)
    // xor
    // !
    echo "----------------------";
    echo "<br>";

    $a1= (True and True);
    echo $a1;
    echo "<br>";

    echo var_dump($a1);
    echo "<br>";

    echo "----------------------";
    echo "----------------------";
    echo "<br>";

    $a1= (True xor True);
    echo $a1;
    echo "<br>";

    echo var_dump($a1);
    echo "<br>";

    echo "----------------------";

    //Data Types in PHP
    // 1. String
    // 2. Float
    // 3. Boolean
    // 4. Int
    // 5. Array
    // 6. object
    
echo "<br>";

$b1= "op";
echo var_dump($b1);
echo "<br>";


$b1= False;
echo var_dump($b1);
echo "<br>";

$b1= 6.6;
echo var_dump($b1);
echo "<br>";


$b1= 66;
echo var_dump($b1);
echo "<br>";

echo PI;
    ?>
    </div>
</body>
</html>