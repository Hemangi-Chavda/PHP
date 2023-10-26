<?php 
    //7. Remove the last number from the array created in question 5.
    $numbers=array(2,4,6,8,10);

   // unset($numbers[4]);


    $remove=array_pop($numbers);

    echo"removed array is :";
    print_r($remove);

    echo "<br>";
    print_r ($numbers);
?>