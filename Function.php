<?php

require_once "data/Person.php";

$iqbal = new Person("Iqbal", "Ngamprah");
$iqbal->name = "Iqbal";
$iqbal->sayHello("Eva");

$joni = new Person("Eva", "Sumedang");
$joni->name = "Joni";
$joni->sayHello(null);

$iqbal->info();
$joni->info();