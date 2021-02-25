<?php

require_once "data/Person.php";

$person = new Person("Eko", "Subang");
$person->name = "Mochammad Iqbal Iskandar";
$person->address = "Bandung";

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Name : $person->country" . PHP_EOL;

var_dump($person);

$person2 = new Person("Iqbal", "Ngamprah");
$person2->name = "Eva Nur Hasanah";
//$person2->address = "Sumedang";  //di comment, tes nullable property

echo "Name : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Name : $person2->country" . PHP_EOL;

var_dump($person2);