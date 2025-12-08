<?php
namespace App\Services;
use GuzzleHttp\Client;

class ProductService
{
    private Client $client;

    public function __construct(
        private readonly string $apiUrl ="https://dummyjson.com/products/1"
    )
    {
        $this->client = new Client();
    }

    public function getProduct():array{
        $response = $this->client->get($this->apiUrl,[
            
        ]);

        $productData = json_decode($response->getBody()->getContents(),true);

        return $productData;
    } 
}