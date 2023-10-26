<?php 
    //8.Remove a specific number of your choice from the array and display the updated array.

    $numbers=array(2,4,6,8,10);

    unset($numbers[2]);

    print_r($numbers);
?>