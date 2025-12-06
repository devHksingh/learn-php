<?php


$str = "there is loin in the forest";

$pos = strpos($str,"forest");
var_dump($pos); 
// replace text

var_dump(str_replace("forest","woods",$str));
var_dump($str);
/**
 * str_replace does not replace original content in variable
 */

preg_match_all('/\w{5}/',$str,$matches);

echo"\n---------\n";
var_dump($matches);