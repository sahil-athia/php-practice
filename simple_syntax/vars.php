<?php 
// vars start with $ and are case sensitive

$txt = "random text";
$x = 5; 
// global var
$y = 9;

echo "this is $txt \n";

echo $x + $y . "\n";

// change the global vars
function myTest() {
  
  // need to use the word global
  global $x, $y;
  $y = $x + $y + 145;
}
myTest();
echo $y . "\n";
?>