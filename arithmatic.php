<?php


function add($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}  


function subtract($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
        echo $a - $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a * $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a / $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function remain($a,$b) {
	if (is_numeric($a) && is_numeric($b)) {
        echo $a * $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function compare($a,$b, $strict = true) {
	if($strict === true) {
		echo $a === $b ? 'TRUE' : 'FALSE' . PHP_EOL;
	    } else{ 
			echo $a == $b ? 'TRUE' : 'FALSE' . PHP_EOL;
		}
		
}

compare('Omar','omar', false);
add(1,'batman');
subtract('elf',5);
multiply('super',3);
divide('line',4);
remain(15,'three');

?>