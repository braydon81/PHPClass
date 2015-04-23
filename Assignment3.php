<?php

require 'Person.php';
require 'Address.php';

$address = new Address;
$person  = new Person;

$personArray  = array("Braydon", "Johnson", "06/11/1993");
$addressArray = array("16", "Cottage Path", "Mankato", "Minnesota", "56001");

$person  = BuildPerson($person, $personArray);    
$address =  BuildAddress($address, $addressArray);    

function BuildPerson($person, $personArray){

    for($i = 0; $i < sizeof($personArray); $i++)
    {
        if($i == 0)
        {
             $person->firstName = $personArray[$i];
        }
        
        if($i == 1)
        {
             $person->lastName = $personArray[$i];
        }
        
        if($i == 2)
        {
             $person->birthDate = $personArray[$i];
        }
    }
    
    return $person;
    
}


function BuildAddress($address, $addressArray){
    $count = 0;
    for($i = 0; $i < sizeof($addressArray); $i++)
    {
        if($i == 0)
        {
            $address->street1 = $addressArray[$i];
        }
        
        if($i == 1)
        {
            $address->street2 = $addressArray[$i];
        }
        
        if($i == 2)
        {
            $address->city = $addressArray[$i];
        }
        if($i == 3)
        {
            $address->state = $addressArray[$i];
        }
        
        if($i == 4)
        {
            $address->zipCode = $addressArray[$i];
        }
    }
    return $address;
    
}

foreach($personArray as $element)
{
    echo $element . "</br>"   ;   
}
 echo "</br>";
foreach($addressArray as $element)
{
    echo $element . "</br>"   ;   
}
   
echo "</br>";
echo $person ->firstName . "<br/>";
echo $person ->lastName. "<br/>";
echo $person ->birthDate. "<br/>";

echo "<br/>";

echo $address -> street1 . "<br/>";
echo $address->street2. "<br/>";
echo $address->city . "<br/>";
echo $address->state. "<br/>";
echo $address->zipCode. "<br/>";


?>