<?php
/**
 * Created by PhpStorm.
 * User: Octavian
 * Date: 21-Jun-17
 * Time: 6:02 PM
 */
include('Product.php');
include('Inventory.php');

$inv = new Inventory();

$apple = new Product('1', '59', '30');
$cherry = new Product('2', '30', '50');
$tomato = new Product('3', '10', '100');


$inv->addProducts([$apple, $cherry, $tomato]);

$inv->listAllProducts();
$inv->inventorySum();

$inv->deleteProduct([$apple]);