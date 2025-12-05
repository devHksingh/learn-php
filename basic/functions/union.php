<?php
declare(strict_types=1);


function processInput(int|float|string $input){
    return match(true){
        is_int($input) => "Integer: ". ($input *2). "\n",
        is_float($input) => "Float : ".round($input,2)."\n",
        is_string($input) => "String : " .strtoupper($input) . "\n",
        default => "Unknown type"
    };
}

$inputs = [44,3.14,"hello",22,22.2,"world"];

foreach($inputs as $input ){
    echo processInput($input);
}