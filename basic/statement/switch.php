<?php

// swtich statement

$size = "XL";

switch($size){
    case"M":
        echo "Medium size \n";
        break;
    case"S":
        echo "Small size \n";
        break;
    case"L":
        echo "Large size \n";
        break;
    case"XL":
        echo "Extra Large size \n";
        break;
    default:
        echo "Unknown size \n";
}