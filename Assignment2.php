<?php
    
    $array_all = array();
    $string_array = array();
    $int_array = array ();
    $handle = fopen("input.txt", "r");
    $i = 0;
    $k = 0;
    $L = 0;
    if ($handle) {
        echo "array all: ";
        while (($line = fgets($handle)) !== false) {
        $array_all[$i] = $line;
        echo $array_all[$i];
        $i++;
    }
    $j = 0;    
    foreach($array_all as $element)
    {
        if(is_int($element))
        {
            $int_array[$k] = $array_all[$j];
            $k++;
        }
        else
        {
            $string_array[$L] = $array_all[$j];
            $L++;
        }
        $j++;
    }
        
    echo nl2br("\nInt array: ");
    foreach($int_array as $x)
    {
        echo nl2br("\n int array value " . $x);
    }
        
    foreach($string_array as $x)
    {
        echo nl2br("\n string array value " . $x);
    }

    fclose($handle);
}

?>