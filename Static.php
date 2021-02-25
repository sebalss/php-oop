<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

$mathHelper = new MathHelper();
echo $mathHelper->name . PHP_EOL;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Haha Hihi langsung lulus";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(15, 15, 15, 15);
echo "Result = $result" . PHP_EOL;