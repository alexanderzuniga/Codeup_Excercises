<?php

function error($a, $b, $is_not_numeric = true) {
	if ($is_not_numeric) {
        return 'ERROR: $a and/or $b are not numeric values, enter numbers.' . PHP_EOL;
    } else {
        return 'ERROR: Please enter denominator < or > 0.' . PHP_EOL;
	}
}

function add($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
    	return error($a, $b);
    }
}

// $sum = add(2, 'banana');
// echo $sum . PHP_EOL; 
 

function subtract($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
    	return error($a, $b);
    }

}
// $sub_answer = subtract(4, 'banana');
// echo $sub_answer . PHP_EOL;

function mult($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
    	return error($a, $b);
    	}
}

// $multi_answer = mult(4, 3);
// echo $multi_answer . PHP_EOL;

function remain($a,$b) {
	if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
    	return error($a, $b);
    	}
}

// $remainder = remain(5,2);
// echo $remainder . PHP_EOL;


function divide($a, $b) {
     if (is_numeric($a) && is_numeric($b)) {
     	if ($b == 0) { 
	    	return error($a, $b, false);
	    } else {
			return $a / $b . PHP_EOL;
		}
	} else {
		error($a, $b);
	}
}
$div_answer = divide(4, 0);
echo $div_answer . PHP_EOL;




?>