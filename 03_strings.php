<?php
//String manupulation
$str1="Mitul";

$str2=strlen($str1);
echo "The length of 'Mitul' is : ";
echo $str2;

echo "<br>"."The length of Mitul is : ".$str2; //String concatination

echo "<br>"."The word count in Mitul is : ".str_word_count($str1);
echo "<br>"."Reverse of Mitul is : ".strrev($str1);
?>