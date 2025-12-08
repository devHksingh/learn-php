<?php

class User{
    public function __construct(
        public readonly string $name,
        public string $email
    )
    {
    }
}

$user = new User('Chris',"Chris@email");
echo $user->email;
echo "\n". $user->name ."\n";
// $user->name = "jhon"; 
// can not changed user name because its readonly.
$user->email = "new@email.com";
echo $user->email;

//2. Constructor property promotion
class Car{
    public function __construct(
        public string $brand,
        public string $model,
        public int $year,
        public float $price
    )
    {
    }
}
$car = new Car("Toyota","Corolla",2020,20000);
var_dump($car);
//3. Match expression

$status = 200;

$result = match($status){
    200,201=> "Success",
    404=> "Not founc=d",
    400=>"Bad Request",
    500=>"Server Error",
    default=>"Unkown status"
};

echo $result;

class Address{
    public function getCountry(){
        return "Austria";
    }
}

class Order {
    public function getAddress(){
        return null; // coulde be null for digital products
    }
}

$order = new Order();

// $country = null;

// if($order->getAddress()){
//     $country = $order->getAddress()?->getCountry();
// }
// echo"\n";
// var_dump($country);


$country = $order->getAddress()?->getCountry();

class Product {
    public function __construct(
        public string $name,
        public ?float $price=null,
        public ?float $beforePrice=null,
        public ?float $afterPrice = null
    )
    {
        
    }
}

// $product = new Product("laptop",null,null,100);
// named argument

$product = new Product(
    name:"laptop",

    afterPrice:100
);
echo "\n";
var_dump($product);