<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Iqbal";
$manager->sayHello("asd");

$vp = new VicePresident();
$vp->name = "Adelya";
$vp->sayHello("Eva");