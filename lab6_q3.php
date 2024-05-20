<?php

function calculateArea($length, $width) {

    $area = $length * $width;
    
    return $area;
}

$length = 10;  
$width = 5;    

$area = calculateArea($length, $width);

echo "The area of the rectangle with length $length and width $width is: $area";
?>