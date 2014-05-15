<?php


// function add($a, $b) {
//     echo $a + $b . PHP_EOL;
// }

// function subtract($a, $b) {
//     echo $a - $b . PHP_EOL;
// }

// function multiply($a, $b) {
//     echo $a * $b . PHP_EOL;
// }

// function divide($a, $b) {
//     echo $a / $b . PHP_EOL;
// }

// function remain($a,$b) {
// 	echo $a % $b . PHP_EOL;
// }

// function compare($a,$b, $strict = true) {
// 	if($strict === true) {
// 		echo $a === $b ? 'TRUE' : 'FALSE';
// 	    } else{ 
// 			echo $a == $b ? 'TRUE' : 'FALSE';
// 		}
// 		echo PHP_EOL;
// }

// compare('Omar','omar', false);

// add(1,1);
// subtract(10,5);
// multiply(4,3);
// divide(16,4);
// remain(15,3);



function inspect($variable = null, $dump = true)
{	if ($dump === true) {
		var_dump($variable);
	} else {
		print_r($variable);
	}
}

$heroes = (['batman', 'superman', 'bartman']);
inspect($heroes);

print_r($heroes);


?>