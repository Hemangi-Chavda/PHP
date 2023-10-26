<?php

$cities = array("rajkot", "baroda", "ahmadabad","bangolar");
$arrlength = count($cities);
$remove=array_pop($cities);

    echo"removed array is :";
    print_r($remove);

    echo "<br>";
    print_r ($cities);

?>