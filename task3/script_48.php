<?php
function myfunction($A1,$a2)
{
return $A1 . "-" . $a2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction"));
?>