<?php

require_once "bootstrap.php";

$productRepository = $entityManager->getRepository('Product');

$products = $productRepository->findAll();

foreach ($products as $product){
    echo "Pruducto: " . $product->getName() . "\n";
}

