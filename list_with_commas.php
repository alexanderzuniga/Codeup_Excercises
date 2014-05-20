<?php


// Converts array into list n1, n2, ..., and n3
//function humanized_list($array) {
  // Your solution goes here!
//}

// List of famous peeps
$physicist_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicist_array = explode(',', $physicist_string); 


$last = array_pop($physicist_array);

$famous_fake_physicists = implode(',', $physicist_array);

// // Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists} " . "and" . "$last.\n";







?>


