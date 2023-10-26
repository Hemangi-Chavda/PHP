<?php

$a = array(
  array(
    'id' => 5698,
    'first_name' => 'hemangi',
    'last_name' => 'disha',
  ),
  array(
    'id' => 4767,
    'first_name' => 'megha ',
    'last_name' => 'riya',
  ),
  array(
    'id' => 3809,
    'first_name' => 'priya',
    'last_name' => 'jiya',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
?>