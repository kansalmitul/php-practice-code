    <?php
   
    $RecordedTemp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
    $RecordedTemp_Array = explode(",", $RecordedTemp); //To convert a string to array

    $TempCount = count($RecordedTemp_Array);
    echo "Total Temp count is ".$TempCount."<br>";

    $Sum = array_sum($RecordedTemp_Array);
    echo "Total sum of all temp values are : ".$Sum."<br>";

    foreach($RecordedTemp_Array as $RecordedTemp_Array){
        echo "Average temp is ".$Sum/$TempCount;
        break;
    }
echo "<br>"."---------------------------";
    asort($RecordedTemp_Array);
    rsort($RecordedTemp_Array);