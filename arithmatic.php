<?php

function error($a, $b, $is_not_numeric = true) {
	if ($is_not_numeric) {
        echo "ERROR: {$a} and/or {$b} are not numeric values, enter numbers.\n";
    } else {
        echo "ERROR: Please enter denominator < or > 0. \n";
	}
}

function add($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b . PHP_EOL;
    } else {
    	error($a, $b);
    }
}
    
 
//add(1, "batman");

function subtract($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
        echo $a - $b . PHP_EOL;
    } else {
    	error($a, $b);
    	}

}
//subtract(4, 'batman');

function mult($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a * $b . PHP_EOL;
    } else {
    	error($a, $b);
    	}
}

//mult(4, 'bartman');

function remain($a,$b) {
	if (is_numeric($a) && is_numeric($b)) {
        echo $a % $b . PHP_EOL;
    } else {
    	error($a, $b);
    	}
}

//remain(12,'batman');


function divide($a, $b) {
     if (is_numeric($a) && is_numeric($b)) {
     	if ($b == 0) { 
	    	error($a, $b, 0);
	    } else {
			echo $a / $b . PHP_EOL;
		}
	} else {
		error($a, $b);
	}
}

divide(4, 0);
divide('a', 1);


?>