<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->hello("Budi");
$person->goodBye("Tia");

$person->name = "Iqbal";
var_dump($person);

$person->run();