<?php
// Write a program that prints the numbers from 1 to 100. 
// for ($c = 0; $c <= 100; $c++) {
// 	echo "$c\n";
// }


// But for multiples of three print “Fizz” instead of the number and
for ($c = 0; $c <= 100; $c++) {
	if ($c % 3 == 0 && $c % 5 == 0) {
		echo "FIZZBUZZ\n";
	}
	elseif ($c % 3 == 0)  {
		echo "FIZZ\n"; 
	}
	elseif ($c % 5 == 0) { 
		echo "BUZZ\n"; 
	}
    else {
		echo "$c\n";
	}
}
// for the multiples of five print “Buzz”. 



// For numbers which are multiples of both three and five print “FizzBuzz”.






?>