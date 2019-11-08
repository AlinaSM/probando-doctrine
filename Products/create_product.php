<?php

require_once "bootstrap.php";


$newDataProduct = $argv[1];

$product = new Product();

$product->setName($newDataProduct);

$entityManager->persist($product);
$entityManager->flush();

echo "Entidad creada con el id: ". $product->getId() ."\n";