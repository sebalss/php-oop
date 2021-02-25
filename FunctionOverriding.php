<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name="Eva";
$manager->sayHello("Iqbal");

$vp = new VicePresident();
$vp->name="Adel";
$vp->sayHello("Iqbal");


