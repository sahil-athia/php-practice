<?php
// any number without a decimal point is an integer

// check to see if value is an integer

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>