<?php
// any number without a decimal point is an integer

// check to see if value is an integer

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

// any number with a decimal or in exponental form is a FLOAT
// can check using is_float()

$x = 10.365;
var_dump(is_float($x));

// in php, PHP_FLOAT_MAX is the largest floating point number that can be represented
// infinity is any thing larger than PHP_FLOAT_MAX
// we can check this with is_finite or is_infinate

$x = 1.9e411;
var_dump($x);
echo var_dump(is_finite($x));
echo var_dump(is_infinite($x));

// php is_numeric will solve if a variable is a number or numeric string or neither
echo "is numeric \n";

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>