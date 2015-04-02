<?php
    
    $side1 = 14.8;
    $side2 = 20.3;
    $side3 = 25.3;
    $angle1 = 36;
    $angle2 = 53;
    $angle3 = 91;

    GetPerimeter($side1, $side2, $side3);
    GetSine($side2, $side3);
    GetCosine($side1, $side3);
    GetTangent($side2, $side1);
    GetArea($side1, $side2, $side3);

    function GetPerimeter($side1, $side2, $side3)
    {
        $perimeter = $side1 + $side2 + $side3;
        echo 'The Perimeter is: '; 
        echo $perimeter;
    }

    function GetSine($opposite, $hypotenuse)
    {
        $sine = $opposite / $hypotenuse;
        echo nl2br("\nThe Sine is: ");
        echo $sine;
    }

    function GetCosine($adjacent, $hypotenuse)
    {
        $cosine = $adjacent / $hypotenuse;
        echo nl2br("\nThe Cosine is: ");
        echo $cosine;
    }

    function GetTangent($opposite, $adjacent)
    {
        $tangent = $opposite / $adjacent;
        echo nl2br("\nThe Tangent is: ");
        echo $tangent;
    }

    function GetArea($side1, $side2, $side3)
    {
        $area = ($side1 + $side2 + $side3) / 2;
        echo nl2br("\nThe Area is: ");
        echo $area;
    }
        
?>