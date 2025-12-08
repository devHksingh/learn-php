<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . "/ProductService.php";



use App\Services\ProductService;
$productService = new ProductService();

$products = $productService->getProduct();

var_dump($products);
