<?php 
    //Sort the array from question 9 in reverse alphabetical order.

    $fruits=array("apple","mango","grapes","pineapple");

    rsort($fruits);
  
  foreach($fruits as $fruit)
  {
      print_r($fruit);
      echo "<br>";
  }
?>