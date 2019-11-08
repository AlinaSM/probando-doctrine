<?php

require_once "bootstrap.php";

$id  = 1;
$newName = "Lala";

$product = $entityManager->find("Product", $id);

if($product === null){
    echo "Producto no encontrado.\n";
    exit(1);
}

$product->setName($newName);
$entityManager->flush();