<?php
for ($c = 0; $c <= 100; $c++) {
	$divBy3 = ($c % 3 == 0);
	$divBy5 = ($c % 5 == 0);

	if ($divBy3 && $divBy5) {
		echo "FIZZBUZZ\n";
	}
	elseif ($divBy3)  {
		echo "FIZZ\n"; 
	}
	elseif ($divBy5) { 
		echo "BUZZ\n"; 
	}
    	else {
		echo "$c\n";
	}
}
// for the multiples of three print “Fizz”.
// for the multiples of five print “Buzz”. 
// For numbers which are multiples of both three and five print “FizzBuzz”.
?>
