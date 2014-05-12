<?php

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'Guess a number! ');

// Get the input from user
$number = (int) fgets(STDIN);

if ($number % 2 == 0);

// Output the user's name
fwrite(STDOUT, "{$number} is even\n");


?>