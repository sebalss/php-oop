<?php
require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Eva";
$cat->run();

$dog = new Dog();
$dog->name = "Adelya";
$dog->run();