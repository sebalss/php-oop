<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

//$location = new Location(); //Error karena class yang menggunakan abstract tidak bisa membuat object

$city = new City();
$province = new Province();
$country = new Country();