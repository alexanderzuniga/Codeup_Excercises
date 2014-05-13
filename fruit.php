<?php 

$fruit = [
	1 => ['fruit'=> 'apple', 'color' => 'red'],
	2 => ['fruit' => 'grape', 'color' => 'purple'],
	3 => ['fruit' => 'melon', 'color' => 'green'] 
	
];	
foreach($fruit as $key => $details) {
	echo $details['fruit'] . ' is ' . $details['color'] . PHP_EOL;
}




?>