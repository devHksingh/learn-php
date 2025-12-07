<?php

class Product{
    public function __construct(
        public string $name,
        public float $price

    )
    {
        
    }
    public function hasDiscount():bool{
        return $this->price<100;
    }
    public function getDescription():string{
        return "{$this->name} costs {$this->price}$";
    }
    public function getLink():string{
        return "app-link";
    }
}

class DigitalProduct extends Product{
    public function getLink():string{
        return "app-link";
    }
}

$product = new Product("laptop",110);
var_dump($product);
$application = new DigitalProduct("demo-application",1200);
var_dump($application->getLink(), $application->getDescription());