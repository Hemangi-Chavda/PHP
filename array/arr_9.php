<?php 

//Sort an array of words in alphabetical order.
  $fruits=array("apple","mango","grapes","pineapple");

  sort($fruits);

foreach($fruits as $fruit)
{
    print_r($fruit);
    echo "<br>";
}

?>