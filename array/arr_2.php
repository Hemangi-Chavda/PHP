<?php

//Add a new color to the array from question 1.

$colors=array("black","blue","pink");

$pos=4;
$new=array("white");
array_splice($colors ,$pos,0,$new);
print_r($colors);


?>