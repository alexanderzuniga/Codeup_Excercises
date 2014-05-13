<?php

//Control Structure exercise.
//Alex Zuniga

// Prompt user for a starting number

do {
	fwrite(STDOUT, "Enter a Starting Number please.\n");
	$starting = trim(fgets(STDIN));
} while (!is_numeric($starting));


//Entering second number
do {
	fwrite(STDOUT, "Enter a Ending Number please.\n");
	$ending = trim(fgets(STDIN));
} while (!is_numeric($ending));


// setting the increment
fwrite(STDOUT, "Excellent! Now choose an number to count by. ");

$increment = trim(fgets(STDIN));
if ($increment == "") {
	$increment = 1;
}

if ($starting < $ending) {

	for ($display = $starting; $display <= $ending; $display += $increment) {
	echo "$display\n";
	}
}
 elseif ($starting > $ending) {
	for ($display = $starting; $display >= $ending; $display -= $increment) {
	echo "$display\n";
	}
}





?>