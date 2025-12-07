<?php

class Product{
    

    // constructor
    public function __construct(
        public string $name,
    public int $price,
    )
    {
    }
    protected function printPrice():void{
        echo $this->price . $this->name."\n";
    }
    public function isExpensive():bool{
        $this-> printPrice();
        return $this->price > 100;

    }
}

$product = new Product("laptop",400);
var_dump($product);
echo"\n";
echo $product->name;
echo"\n";
echo $product->price;
echo"\n";
var_dump($product->isExpensive());