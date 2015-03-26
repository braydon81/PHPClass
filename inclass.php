<?php

    $currentDate = "2015-03-26";
    $finalsDate = "2015-05-04";
    
    printf("hi");


    CalculateDate($currentDate, $finalsDate);

    function CalculateDate ($date1, $date2)
    {
        $diff = abs(strtotime($date2) - strtotime($date1));
        echo "Days until finals: " .floor($diff / (60*60*24));
    }



?>
