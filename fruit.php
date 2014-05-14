<?php 

$fruits = [
	'apples'=> 'red',
	'grapes'=> 'purple',
	'melons' => 'green' 
	
];	




foreach($fruits as $fruit => $color) {
	echo "{$fruit} are {$color}\n";
}

// $fruits = array('apple', 'orange', 'banana', 'grapes');

// // for ($i = 0; $i < count($fruits); $i++) {
// // 	echo $fruits[$i] .  PHP_EOL;
// // }

// foreach ($fruits as $fruit) {
// 	echo $fruit . PHP_EOL;
// }
?>