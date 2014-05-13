<?php
// Prompt user for a starting number and ending number, 

	fwrite(STDOUT, "Enter a Starting Number please.\n");

	$starting = trim(fgets(STDIN));

	fwrite(STDOUT, "Now enter an Ending number.\n");

	$ending = trim(fgets(STDIN));
	
//then display all the numbers from the starting to ending using a for loop.

	// var_dump($starting);
	// var_dump($ending);
	// die();

		for ($display = $starting; $display <= $ending; $display++) {
		echo "$display\n";
	}




// Refactor to allow user to choose increment. (count by 1, 2, 10, ...)

// Default increment to 1 if no input.

// Make sure you are only allowing users to pass in numbers. Give an error message is both passed arguments are not numeric. See php.net/is_numeric.

?>