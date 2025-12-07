<?php


$colors = ["red","green","blue"];
var_dump($colors);
var_dump($colors[0]);
// add to array at end
$colors[] ="yellow";
// remove color from an array 
unset($colors[1]);
// assosicated array 
echo"\n Colors \n";
var_dump($colors);
$user = [
    "name"=> "Harshit",
    "age"=> 28,
];

var_dump($user);
echo $user["name"];

$blogPost = [
    "title" => "PHP 8.5",
    "author" => [
        "name" => "Jhon",
        "role" => "editor"
    ],
    "comments "=> [
        [
            "user" => "Jane",
            "text" => "Great article!"
        ],
    ]
    ];
echo"\n";
var_dump($blogPost);

echo  "\n";
echo $blogPost["comments "][0]["user"];