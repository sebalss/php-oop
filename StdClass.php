<?php

$array = [
    "firstName" => "Mochammad",
    "middleName" => "Iqbal",
    "lastName" => "Iskandar"
];

$row = (object) $array;

echo "First Name : $row->firstName" . PHP_EOL;
echo "Middle Name : $row->middleName" . PHP_EOL;
echo "Last Name : $row->lastName" . PHP_EOL;