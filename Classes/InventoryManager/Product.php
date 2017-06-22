<?php

/**
 * Created by PhpStorm.
 * User: Octavian
 * Date: 21-Jun-17
 * Time: 3:44 PM
 */

class Product {
    public $id;
    public $price;
    public $quantity;

    public function __construct($id, $price, $quantity){
        $this->id = $id;
        $this->price = $price;
        $this->quantity = $quantity;

    }
}