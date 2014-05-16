<?php
$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function check($nothing) {
	 if (empty($nothing)) {
	 	return '$nothing is EMPTY' . PHP_EOL;
	 } else {
	 	return '$nothing is SET' . PHP_EOL;
		}
}


$a = check($nothing);
echo $a;





// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results



?>