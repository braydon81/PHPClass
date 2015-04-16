<?php

require 'Person.php';
require 'Address.php';

$address = new Address;
$person = new Person;

$person->firstName = "Braydon";
$person->lastName = "Johnson";
$person->birthDate = "06/11/1993";

$address->street1 = "somewhere 111";
$address->street2 = "nowhere 1111";
$address->city = "Mankato";
$address->state = "MN";
$address->zipCode = "56001";  

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