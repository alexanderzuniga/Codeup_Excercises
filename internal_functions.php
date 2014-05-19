<?php
$nothing = "ALEX";
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function check($a) {
	 if (empty($a)) {
	 	return "$a is EMPTY'" . PHP_EOL;
	 } elseif (isset($a)) {
	 	return "$a is SET" . PHP_EOL;
	 } 
}
 

echo check($nothing) . PHP_EOL;
echo check($something) . PHP_EOL;

$factor = serialize($array);
echo $factor . PHP_EOL; 

$flip = unserialize($factor);
print_r($flip) . PHP_EOL;

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results



?>