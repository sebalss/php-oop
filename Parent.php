<?php
require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL; //ambil data function yang berada di parent class "Shape"

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL; //ambil data function yang berada di child class "Rectangle"
echo $rectangle->getParentCorner() . PHP_EOL; //ambil data function yang berada di parent class "Rectangle" dengan keyword (parent)

