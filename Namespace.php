<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new Data\One\Conflict(); //Membuat objek dengan namespace yang berbeda(One) dan class yang sama
$conflict2 = new Data\Two\Conflict(); //Membuat objek dengan namespace yang berbeda(Two) dan class yang sama

echo Helper\APPLICATION . PHP_EOL;

echo Helper\helpMe();
