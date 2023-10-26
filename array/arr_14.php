<?php
//Remove the email element from the associative array and display the updated array.

$person=array("name"=>"hemangi","age"=>20,"email"=>"hemangi@gmail.com");
$remove=array_pop($person);

    echo"removed array is :";
    print_r($remove);

    echo "<br>";
    print_r ($person);
?>