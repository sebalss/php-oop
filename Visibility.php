<?php

require_once "data/Product.php";

$product = new Product("Apple", 20000);

echo "Nama : " . $product->getName() . PHP_EOL;
echo "Harga : " . $product->getPrice() . PHP_EOL;

//$product->name = "buah";
//$product->price = 20000;

$dummy = new ProductDummy("Sirsak", 25000);
$dummy->info();

