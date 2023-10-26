<?php 
//11. Create two arrays, one with fruits and another with vegetables. Merge them into a single array.

$fruits=array("apple","mango","grapes","pineapple");
$vegetable=array("potato","tomato","chilly","ginger");

$mege=array_merge($fruits,$vegetable);

print_r($mege);
?>