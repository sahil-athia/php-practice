<?php
// string basics
$greet = "Hello There";

echo $greet;

// strlen returns the length of a given string
echo strlen($greet) . "\n";

// str_word_count retuns the number of words in a string
echo str_word_count($greet) . "\n";

// strrev reverses a string
echo strrev($greet) . "\n";

// strpos will find the first position match of something in a string
// if no match is found, it returns falses
echo strpos($greet, "There") . "\n";

// str_replace will replace something in a string
echo str_replace("There", "World", $greet) . "\n";

?>