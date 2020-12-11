<?php
$UnitConsumend =78;
    echo "<br>";
    
    if ($UnitConsumend <= 50){
    
        $cost = 1.50;
        echo $Amount = ($cost * $UnitConsumend);
        echo "<br>";
        echo var_dump($cost);
        }
    else if ($UnitConsumend > 50 and $UnitConsumend <=151){
        
            $cost = 2.00;
            echo $Amount = ($cost * $UnitConsumend);
            echo "<br>";
        }
    else if ($UnitConsumend >= 152 and $UnitConsumend < 250){
        
            $cost = 4.50;
            echo $Amount = ($cost * $UnitConsumend);
            echo "<br>";
        }
    else if ($UnitConsumend >= 250){
        
            $cost = 7.00;
            echo $Amount = ($cost * $UnitConsumend);
            echo "<br>";
        }
?>