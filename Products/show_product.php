<?php

require_once "bootstrap.php";

$id = 1;

$product = $entityManager->find("Product", $id);

if(!$product){
    echo "Producto no encontrado. \n";
    exit(1);
}


echo "Producto: " . $product->getName() . "\n";


