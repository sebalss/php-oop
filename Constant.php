<?php
require_once "data/Person.php";

define("APPLICATION", "Belajar PHP OOP"); //constant php versi <7.4
const APP_VERSION = "1.0.0"; //constant php versi >= 7.4

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo Person::AUTHOR . PHP_EOL; //mengakses constant AUTHOR dengan penulisan NamaClass::(NAMA_CONSTANT) jika class->function