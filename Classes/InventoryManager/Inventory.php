<?php

/**
 * Created by PhpStorm.
 * User: Octavian
 * Date: 21-Jun-17
 * Time: 3:44 PM
 */
class Inventory {

    protected $inventory = [];

    public function inventorySum(){
        $value = 0;
        foreach($this->inventory as $product){
            $value += $product->price;
        }

        print("Inventory total value: " . $value . "\n");

    }

    public function listAllProducts(){
        foreach($this->inventory as $product ){
            echo "<pre>";
            echo("Product: " . $product->id . "\n");
        }
    }


    public function addProducts(array $products){
        foreach($products as $product){
            array_push($this->inventory, $product);
        }

    }

    public function deleteProduct(array $product) {
        foreach($product as $prod) {
            $key = array_search($prod, $this->inventory);
            array_splice($this->inventory, $key, 1);
        }

        echo "Product " . $prod->id . " succesfully deleted from Inventory.";
        print_r($this->inventory);
    }
}