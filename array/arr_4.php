<?php 
//Check if the color "Green" exists in the array from question 1.

$colors=array("black","blue","pink");

if (in_array("green", $colors))
{
    echo "green is eists in array";
}
else
{
    echo "green is not exist";
}

?>