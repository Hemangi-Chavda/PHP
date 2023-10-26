<?php
$cities = array("rajkot", "baroda", "ahmadabad","bangolar");
$reverse=array_reverse($cities);
$preserve=array_reverse($cities,true);

print_r($cities);
print_r($reverse);
print_r($preserve);
?>